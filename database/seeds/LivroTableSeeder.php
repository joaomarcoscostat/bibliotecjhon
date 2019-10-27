<?php

use Illuminate\Database\Seeder;
use App\Livro;

class LivroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Livro::create([
            'nome'=> 'Deus não está morto',
            'autor'=> 'Rice Broocks',
            'capa'=> 'imagens/capas/Deusnaoestamorto.jpg',
            'descricao'=> 'Simples para quem dispõe a crer e complexo para as mentes puramente cientificas, o conceito de um criador e sustentador de todo o universo já suscitou as mais diversas reações ao longo da história. Se a morte de Deus um dia foi decretada pela intelectualidade, a experiência de milhões atesta e reafirma a vitalidade do cristianismo diariamente. Diante disso, dá para imaginar um acordo ente ciência e fé quando a esse tema?'
        ]);

        Livro::create([
            'nome'=> 'Deus não está morto 2',
            'autor'=> 'Rice Broocks',
            'capa'=> 'imagens/capas/Deusnaoestamorto2.jpg',
            'descricao'=> 'Embasando-se em fatos e em argumentação cientifica, Rice Broocks ataca o ceticismo sobre a concepção da figura de Jesus na sociedade moderna e procura mostrar aos seus leitores um trajeto de raciocínio que ajuda a tornar a fé em argumento real e com credibilidade. O objetivo de Broocks é mostrar por que as teorias modernas que procuram desmentir o conceito de Jesus podem estar erradas. O livro é extensão natural dos conceitos expostos no livro Deus não está morto e no filme popular que carregou o mesmo título.'
        ]);

        Livro::create([
            'nome'=> 'A Cabana',
            'autor'=> 'Rice Broocks',
            'capa'=> 'imagens/capas/Acabana.jpg',
            'descricao'=> 'A filha mais nova de Mackenzie Allen Philip foi raptada durante as férias em família e há evidências de que ela foi brutalmente assassinada e abandonada numa cabana. Quatro anos mais tarde, Mack recebe uma nota suspeita, aparentemente vinda de Deus, convidando-o para voltar áquele cabana para passar o fim de semana. Ignorando alertas de que poderia ser uma cilada, ele segue numa tarde de inverno e volta a cenário de seu pior pesadelo. O que encontra lá muda sua vida para sempre. Num mundo em que religião parece tornar-se irrelevante, "A Cabana" invoca a pergunta: "Se Deus é tão poderoso e tão cheio de amor, por que não faz nada para amenizar a dor e o sofrimento do mundo?" As respostas encontradas por Mack surpreenderão você e, provavelmente, o transformarão tanto quanto ele.'

        ]);

        Livro::create([
            'nome'=> 'De Volta À Cabana',
            'autor'=> 'Rice Broocks',
            'capa'=> 'imagens/capas/Devoltaacabana.jpg',
            'descricao'=> 'Ainda criança, William P. Young, autor de A cabana, conheceu o abandono, a dor e o abuso. Buscou na religião um porto seguro, mas nunca se sentiu totalmente protegido.Assim como Mack, personagem principal de seu romance, ele estava perdido, questionando seus valores, sua fé e o próprio sentido de sua vida.Ao escrever A cabana, Young quis expressar sua dor e apresentar uma nova maneira de enxergar Deus e suas leis incompreensíveis. Por meio da trajetória de Mack, ele nos mostrou os caminhos do perdão, da cura e da reconciliação com o divino e consigo mesmo.Em De volta à cabana, vamos descobrir o que está por trás desses caminhos &ndash ou seja, os conceitos que Young encontrou na teologia e na filosofia para criar sua história.Agora, o teólogo C. Baxter Kruger aprofunda o estudo sobre a Santíssima Trindade e fala sobre a natureza do amor de Deus, demonstrando de que forma ele se manifesta em nossa vida.Citando passagens bíblicas e parábolas inspiradoras, este livro nos ajuda a entender o papel da religião no mundo de hoje, o comportamento humano frente à dor e a nossa capacidade de regeneração &ndash seja diante das grandes tragédias ou das pequenas desilusões que se acumulam no dia a dia.****Se você leu A cabana, deve conhecer a história que deu origem ao best-seller que já vendeu mais de 3 milhões de exemplares no Brasil. Seu autor, William P. Young, resolveu escrever um pequeno livro para que seus filhos conhecessem o tamanho de seu amor e entendessem as questões que tocavam seu coração. Sua intenção era imprimir 15 exemplares e distribuir para familiares e amigos no Natal.Mas a força e a originalidade da história são tão surpreendentes que a obra alcançou um patamar impensável: depois de circular de mão em mão, acabou se tornando um dos maiores fenômenos editoriais dos últimos tempos.A cabana conta a história de Mack, um pai consumido pela dor e pela culpa. Durante um acampamento em família, sua filha mais nova é sequestrada e assassinada. Desesperado, ele se entrega à depressão e se vê perto de perder o pouco que lhe resta na vida.Então, alguns anos depois da tragédia, ele recebe um bilhete de Deus convidando-o para encontrá#NOME?acerto de contas&rdquo Mack renasce, cura as feridas de sua alma e finalmente compreende o sentido dos desígnios divinos.Inspirado na obra de William P. Young, o teólogo C. Baxter Kruger se debruça sobre as questões levantadas pela experiência de Mack para tentar entender os complexos mistérios da existência e as profundas implicações da fé.Analisando em detalhes o conceito da Santíssima Trindade &ndash apresentada por Young como Papai, Jesus e Sarayu &ndash e explicando o significado do amor de Deus, De volta à cabana nos faz retornar ao universo transformador que encantou milhões de pessoas em todo o mundo e reacendeu o debate sobre o papel da religião na espiritualidade humana.'
        ]);
        Livro::create([
            'nome'=> 'A Travessia',
            'autor'=> 'Rice Broocks',
            'capa'=> 'imagens/capas/Atravessia.jpg',
            'descricao'=> 'Jesus pegou a mão de Tony.– Na jornada que está prestes a começar, você poderá escolher curar fisicamente uma pessoa, mas só uma. Assim que escolhê-la, a sua jornada chegará ao fim.– Posso curar uma pessoa? Está me dizendo que sou capaz de curar quem eu quiser? – Na mesma hora, seus pensamentos se voltaram para o seu próprio corpo em um quarto de UTI. – Deixe-me ver se entendi. Posso curar qualquer pessoa que quiser?Jesus se inclinou na direção dele.– Na verdade, você não pode curar ninguém, não sozinho. Mas estarei do seu lado, e a pessoa por quem você decidir orar, eu a curarei através de você.Um derrame cerebral deixa Anthony Spencer, um multimilionário egocêntrico, em coma. Quando “acorda”, ele se vê em um mundo surreal habitado por um estranho, que descobre ser Jesus, e por uma idosa que é o Espírito Santo.À sua frente se descortina uma paisagem que lhe revela toda a mágoa e a tristeza de sua vida terrena. Jamais poderia ter imaginado tamanho horror. Debatendo-se contra um sofrimento emocional insuportável, ele implora por uma segunda chance.Sua prece é ouvida e ele é enviado de volta à Terra, onde viverá uma experiência de profunda comunhão com uma série de pessoas e terá a oportunidade de reexaminar a própria vida. Nessa jornada, precisará “enxergar” através dos olhos dos outros e conhecer suas visões de mundo, suas esperanças, seus medos e seus desafios.Na busca de redenção, Tony deverá usar um poder que lhe foi concedido: o de curar uma pessoa. Será que ele terá coragem de fazer a escolha certa?'

        ]);

        Livro::create([
            'nome'=> 'Ágape',
            'autor'=> 'Rice Broocks',
            'capa'=> 'imagens/capas/Agape.jpg',
            'descricao'=> 'Com mais de 12 milhões de exemplares vendidos desde o seu lançamento, Ágape se tornou o maior sucesso editorial do Brasil. Os dicionários definem a palavra "ágape" como a refeição promovida pelos primitivos cristãos a fim de celebrar o rito eucarístico. O rito confraternizava ricos e pobres em torno de ideais como amizade, caridade, amor. Em Ágape, o padre Marcelo Rossi retoma e amplia o sentido original do conceito: "Ágape é uma palavra de origem grega que significa o amor divino. O amor de Deus pelos seus filhos. E ainda o amor que as pessoas sentem umas pelas outras inspiradas nesse amor divino", assinala no texto de introdução do volume. Com sua abordagem de comunicação moderna, original e leve, padre Marcelo leva conforto espiritual e ensinamentos da Igreja Católica para milhões de brasileiros por meio de programas de rádio e TV. O autor apresenta trechos selecionados do Evangelho de são João e os reinterpreta à luz do significado do amor divino no mundo contemporâneo. Zilda Arns é apenas um dos exemplos evocados pelo sacerdote para ilustrar as manifestações do ágape, seja pela via da caridade, seja na forma do amor ao próximo, sem exigências nem cobranças. O amor ágape, salienta o autor, não é contemplativo nem se encerra no indivíduo, mas exige ação pessoal e ação interpessoal. No prefácio escrito para a obra, Gabriel Chalita acrescenta: "O convite que padre Marcelo nos faz com este livro é exatamente este, que sejamos bons! Que a leitura de trechos da vida de Jesus nos ajude a compreender melhor esse Homem extraordinário que foi capaz de superar a lei e apresentar a razão da própria lei: a pessoa humana. Jesus surpreendeu e surpreende. Seu olhar apaixonante nos impulsiona a desacreditar de teses que nos apresentam um mundo mesquinho, materialista, egoico.'

        ]);

        Livro::create([
            'nome'=> 'Kairós',
            'autor'=> 'Rice Broocks',
            'capa'=> 'imagens/capas/Kairos.jpg',
            'descricao'=> 'Quase três anos depois do lançamento de "Ágape", maior fenômeno editorial brasileiro, que teve seus direitos vendidos para mais de 30 países e adaptação para o público infantil, chega às livrarias "Kairós", o novo livro de Padre Marcelo Rossi. Os leitores que se emocionaram ao conhecer o amor incondicional, o Amor Ágape, irão renovar a sua fé com "Kairós", que conta com prefácio do padre Fábio de Melo. No livro, Padre Marcelo parte da palavra grega kairos, que significa “momento certo”, para falar sobre o tempo de Deus em oposição ao khronos, o tempo cronológico, o tempo dos homens. O autor selecionou passagens da Bíblia com personagens como Abraão, Moisés, José do Egito, Isaías, Maria, Jó e Zaqueu, que passaram por situações de incompreensão, sofrimento e provação e, mesmo assim, souberam esperar pelo tempo de Deus, pelo seu kairos. Todos eles tiveram as suas vidas transformadas no momento que Deus julgou oportuno. Após cada trecho bíblico citado, reflexões e comentários do Padre Marcelo convidam o leitor a refletir sobre suas próprias angústias e a fortalecer a sua fé. O livro também destaca a importância da oração e apresenta no final de cada capítulo uma prece especial para ajudar os leitores a permanecerem perseverantes na fé e confiantes no poder de Deus. Kairós traz ainda uma bênção do Padre Marcelo dedicada exclusivamente aos leitores. Da mesma maneira autêntica e carismática que conversa com milhões de brasileiros em seus programas de rádio e televisão, Padre Marcelo se comunica com os fiéis em Kairós para levar a eles os ensinamentos religiosos e conforto espiritual. Nos 14 capítulos do livro, o autor busca fortalecer nos leitores a certeza de que Deus tem um tempo reservado para cada um de seus filhos. Nas palavras de Padre Marcelo, “tão importante quanto entender o amor Divino, é entender o tempo de Deus. Só assim é que conseguimos controlar nossas ansiedades e cultivar nossa paciência. Quem compreende o Kairós, alcança o Ágape”.'

        ]);

        Livro::create([
            'nome'=> 'Philia',
            'autor'=> 'Rice Broocks',
            'capa'=> 'imagens/capas/Philia.jpg',
            'descricao'=> '"Philia" é o amor dos pais por seus filhos, o amor entre irmãos, entre amigos. Após o sucesso de Ágape e Kairós, com mais de 12 milhões de exemplares vendidos, Padre Marcelo trata as questões de forma simples e direta, com exemplos práticos e orações, apresentando caminhos de esperança e superação através do amor fraternal. São 14 capítulos que buscam curar os males da alma: depressão, ansiedade, tristeza, pessimismo, medo, remorso, vício, desemprego, maledicência, inveja, ciúme, ira, ingratidão e autoimagem.'

        ]);

        Livro::create([
            'nome'=> 'A Culpa È Das Estrelas',
            'autor'=> 'Rice Broocks',
            'capa'=> 'imagens/capas/Aculpaedasetrelas.jpg',
            'descricao'=> 'Hazel é uma paciente terminal. Ainda que, por um milagre da medicina, seu tumor tenha encolhido bastante — o que lhe dá a promessa de viver mais alguns anos —, o último capítulo de sua história foi escrito no momento do diagnóstico. Mas em todo bom enredo há uma reviravolta, e a de Hazel se chama Augustus Waters, um garoto bonito que certo dia aparece no Grupo de Apoio a Crianças com Câncer. Juntos, os dois vão preencher o pequeno infinito das páginas em branco de suas vidas.'

        ]);

        Livro::create([
            'nome'=> 'Cidades De Papel',
            'autor'=> 'Rice Broocks',
            'capa'=> 'imagens/capas/Cidadesdepapel.jpg',
            'descricao'=> 'Quentin Jacobsen tem uma paixão platônica pela magnífica vizinha e colega de escola Margo Roth Spiegelman. Até que em um cinco de maio que poderia ter sido outro dia qualquer, ela invade sua vida pela janela de seu quarto, com a cara pintada e vestida de ninja, convocando-o a fazer parte de um engenhoso plano de vingança. E ele, é claro, aceita. Assim que a noite de aventuras acaba e um novo dia se inicia, Q vai para a escola e então descobre que o paradeiro da sempre enigmática Margo é agora um mistério. No entanto, ele logo encontra pistas e começa a segui-las. Impelido em direção a um caminho tortuoso, quanto mais Q se aproxima de Margo, mais se distancia da imagem da garota que ele achava que conhecia.'

        ]);
    }
}
