document.addEventListener('DOMContentLoaded', () => {
    const radios = document.querySelectorAll('input[type="radio"]');

    radios.forEach(radio => {
        radio.addEventListener('change', (event) => {
            const valor = event.target.value;

            // Remove a classe pagamento-selecionado de qualquer elemento que já a tenha
            document.querySelectorAll('.pagamento-selecionado').forEach(el => {
                el.classList.remove('pagamento-selecionado');
            });

            // Seleciona o elemento com a classe igual ao valor do input
            const elementoSelecionado = document.querySelector(`.${valor}`);
            
            if (elementoSelecionado) {
                elementoSelecionado.classList.add('pagamento-selecionado');
                console.log(`Classe adicionada ao elemento com classe "${valor}"`);
            } else {
                console.log(`Nenhum elemento encontrado com a classe "${valor}"`);
            }
        });
    });



    // Máscara para Número do Cartão
    document.getElementById('numero').addEventListener('input', function(e) {
        let value = e.target.value.replace(/\D/g, '').substring(0,16);
        value = value.replace(/(\d{4})(?=\d)/g, '$1 ');
        e.target.value = value;
    });

    // Máscara para Data de validade (MM/AA)
    document.getElementById('data').addEventListener('input', function(e) {
        let value = e.target.value.replace(/\D/g, '').substring(0,4);
        if (value.length >= 3) {
            value = value.replace(/^(\d{2})(\d+)/, '$1/$2');
        }
        e.target.value = value;
    });

    // Máscara para Código de segurança (CVV)
    document.getElementById('cod').addEventListener('input', function(e) {
        e.target.value = e.target.value.replace(/\D/g, '').substring(0,4);
    });

    // Nome do titular (apenas letras e espaços permitidos)
    document.getElementById('nome').addEventListener('input', function(e) {
        e.target.value = e.target.value.replace(/[^a-zA-ZÀ-ÿ\s]/g, '');
    });
});
