<?php
require_once 'config/database.php';
require_once 'includes/header.php';

// Exemplo de consulta usando PDO
$db = Database::getConnection();
$stmt = $db->query("SELECT * FROM usuarios");
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<main>

    <section>
        <div class="wrapper">
            <div class="banner">
                <div class="esquerda">
                    <h1>Apoie a AMA Itajaí e transforme vidas!</h1>
                    <p>A AMA Itajaí oferece acolhimento e suporte essencial para autistas e suas famílias. Junte-se a nós para fazer a diferença. Saiba como você pode ajudar com doações hoje mesmo!</p>
    
                    <button class="btn-secundario">Saiba mais</button>
                </div>
                <div class="direita">
                    <img class="img-crianca" src="assets/img/banner/IMG1 1.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="infos-container">

        <article class="missao">
            <div class="wrapper">
                <div>
                    <h1>Missão</h1>
                    <p>Oferecer apoio, orientação e acolhimento aos pais e responsáveis por pessoas com Transtorno do Espectro Autista (TEA), promovendo informação de qualidade, suporte emocional e fortalecimento de redes de apoio, para que as famílias possam enfrentar os desafios com mais segurança, empatia e esperança.</p>
                </div>
                <img src="assets/img/home/IMG2.png" alt="">
                <div class="background-img"></div>
            </div>
        </article>
    
        <article class="visao">
            <div class="wrapper">
                <img src="assets/img/home/Group 1.png" alt="">
                <div class="background-img"></div>
                <div></div>
                <div>
                    <h1>Visão</h1>
                    <p>Ser uma referência nacional no apoio a famílias de pessoas com autismo, construindo uma sociedade mais inclusiva, empática e informada — onde cada família se sinta ouvida, apoiada e fortalecida para proporcionar qualidade de vida a seus filhos.</p>
                </div>
            </div>
        </article>    
    
        <article class="valores">
            <div class="wrapper">
                <div>
                    <h1>Valores</h1>
                    <p><strong>Empatia</strong> Colocamo-nos no lugar das famílias, acolhendo suas dores, dúvidas e conquistas com sensibilidade e respeito.</p>

                    <p><strong>Respeito à diversidade:</strong> Valorizamos cada indivíduo e sua trajetória, reconhecendo a singularidade de cada pessoa no espectro e de cada família.</p>

                    <p><strong>Comprometimento:</strong> Atuamos com seriedade, ética e dedicação para gerar impacto positivo na vida das pessoas que atendemos.</p>

                    <p><strong>Transparência:</strong> Mantemos uma comunicação clara e honesta com todas as famílias, parceiros e colaboradores.</p>

                    <p><strong>Colaboração:</strong> Acreditamos na força da rede: juntos somos mais fortes, mais criativos e mais eficazes.</p>

                    <p><strong>Educação contínua:</strong> Promovemos o aprendizado constante, com base em evidências, para pais, cuidadores e a sociedade como um todo.</p>

                    <p><strong>Acolhimento:</strong> Criamos espaços seguros de escuta e troca, onde cada história importa.</p>
                </div>
                <img src="assets/img/home/Group 2.png" alt="">
                <div class="background-img"></div>
            </div>
        </article>
    </section>


</main>

<?php require_once 'includes/footer.php'; ?>
