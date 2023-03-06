<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('games')->count() == 0){

            DB::table('games')->insert([

                [
                    'name' => 'Spider-Man: Miles Morales',
                    'price' => 25.39,
                    'description' => "Após os acontecimentos de Marvel's Spider-Man Remasterizado, o adolescente Miles Morales adapta-se ao seu novo lar ao mesmo tempo que segue as pisadas do seu mentor, o Peter Parker, para se tornar o novo Spider-Man. Mas, quando uma feroz disputa pelo poder ameaça destruir o seu novo lar, o aspirante a herói percebe que, com grande poder, vem também grande responsabilidade. Para salvar toda a Nova Iorque da Marvel, o Miles tem de assumir o papel de Spider-Man.",
                    'platform' => 'Steam',
                    'genre' => 'Single-player, Ação, Aventura',
                    'image' => 'https://s3.gaming-cdn.com/images/products/12953/616x353/marvel-s-spider-man-miles-morales-pc-game-steam-cover.jpg',
                    'trailer' => 'https://www.youtube.com/embed/NTunTURbyUU',
                    'background' => 'https://wallpapers.com/images/featured/bhbtlxz0ovcy8z8c.jpg',
                    'sale' => NULL,
                    'release_date' => '2022-11-18',
                    'developer' => 'Insomniac Games',
                    'rating' => 'PEGI 16',
                ],
                [
                    'name' => 'God of War',
                    'price' => 19.99,
                    'description' => "Introdução ao reino nórdico, com a vingança contra os deuses do Olimpo enterrada há anos no passado, Kratos vive agora como um homem mortal num reino de deuses e monstros nórdicos. É neste mundo duro e impiedoso que ele tem de lutar para sobreviver... e ensinar o seu filho a fazer o mesmo. Aproveitar uma segunda oportunidade Kratos volta a ser um pai. Como mentor e protetor de Atreus, um filho determinado a ganhar o seu respeito, ele vê-se forçado a enfrentar e a controlar a raiva que há muito o define, à medida que explora um mundo extremamente perigoso com o seu filho.",
                    'platform' => 'Steam',
                    'genre' => 'Single-player, Ação, Aventura, RPG',
                    'image' => 'https://s3.gaming-cdn.com/images/products/7325/616x353/god-of-war-pc-game-steam-cover.jpg',
                    'trailer' => 'https://www.youtube.com/embed/K0u_kAWLJOA',
                    'background' => 'https://i.pinimg.com/originals/31/69/0a/31690a81ab4ceb2668046963a8db38bd.jpg',
                    'sale' => NULL,
                    'release_date' => '2022-01-14',
                    'developer' => 'Santa Monica Studio',
                    'rating' => 'PEGI 18',
                ],
                [
                    'name' => 'Dead by Daylight',
                    'price' => 20.00,
                    'description' => "A morte não é uma saída. Dead by Daylight é um jogo de horror de multijogadores (4x1). Um jogador assume o papel do Assassino enquanto os outros quatro jogadores jogam como Sobreviventes e tentam fugir do Assassino — ou serão pegos, torturados e assassinados. Os Sobreviventes jogam em terceira pessoa e têm como vantagem uma melhor percepção situacional. O Assassino joga em primeira pessoa e está mais focado na presa. A cada encontro, o objetivo dos Sobreviventes é fugir do Território de Abate sem ser pego pelo Assassino. Isso é mais difícil do que parece - ainda mais em um cenário que muda a cada partida.",
                    'platform' => 'Steam',
                    'genre' => 'Online PVP, Ação',
                    'image' => 'https://s3.gaming-cdn.com/images/products/1904/616x353/dead-by-daylight-pc-game-steam-cover.jpg',
                    'trailer' => 'https://www.youtube.com/embed/JGhIXLO3ul8',
                    'background' => 'https://images5.alphacoders.com/778/778923.jpg',
                    'sale' => 70,
                    'release_date' => '2016-06-14',
                    'developer' => 'Behaviour Interactive Inc.',
                    'rating' => 'PEGI 18',
                ],
                [
                    'name' => 'The Last of Us Part II',
                    'price' => 39.99,
                    'description' => "Cinco anos depois da jornada perigosa pelos Estados Unidos pós-pandêmicos, Ellie e Joel se estabelecem em Jackson, Wyoming. A vida em uma próspera comunidade de sobreviventes lhes trouxe paz e estabilidade, apesar da ameaça constante dos infectados e de outros sobreviventes mais desesperados. Quando um evento violento interrompe essa paz, Ellie embarca em uma jornada implacável para fazer justiça e encontrar uma solução. Enquanto vai atrás de cada um dos responsáveis, ela se confronta com as repercussões físicas e emocionais devastadoras de suas ações. Uma história complexa e emocionante. Vivencie os conflitos morais cada vez maiores criados pela busca implacável de Ellie por vingança. O ciclo de violência deixado em seu caminho desafiará suas noções de certo ou errado, bem ou mal e herói ou vilão. Um mundo belo, mas perigoso Embarque na jornada de Ellie, levando-a das montanhas e florestas tranquilas de Jackson até as ruínas exuberantes e cobertas pela vegetação.",
                    'platform' => 'Playstation',
                    'genre' => 'Single-player, Ação, Aventura',
                    'image' => 'https://s3.gaming-cdn.com/images/products/6215/616x353/the-last-of-us-part-ii-pc-game-cover.jpg',
                    'trailer' => 'https://www.youtube.com/embed/X0VubwgS2Y4',
                    'background' => 'https://images3.alphacoders.com/106/thumb-1920-1065466.png',
                    'sale' => NULL,
                    'release_date' => '2020-06-18',
                    'developer' => 'Naughty Dog',
                    'rating' => 'PEGI 18',
                ],

                [
                    'name' => 'Forza Horizon 5',
                    'price' => 60.00,
                    'description' => "A derradeira aventura em Horizon está à tua espera! Explora o cenário vibrante e ilimitado do México, e diverte-te ao volante de centenas dos melhores carros do mundo. Esta é a tua Aventura Horizon. Lidera expedições deslumbrantes ao longo das vibrantes paisagens de mundo aberto em evolução constante do México. Diverte-te com a ação ao volante sem limites nos melhores carros do mundo. Este é um mundo aberto versátil. Explora um mundo de contrastes e beleza admiráveis. Descobre desertos vivos, selvas verdejantes, cidades históricas, ruínas escondidas, praias selvagens, vastos desfiladeiros e um gigantesco vulcão coberto de neve.",
                    'platform' => 'Xbox',
                    'genre' => 'Single-player, Ação, Aventura, Corrida, Simulação, Desporto',
                    'image' => 'https://s2.gaming-cdn.com/images/products/8701/616x353/forza-horizon-5-pc-xbox-one-xbox-series-xs-pc-xbox-one-xbox-series-x-s-game-microsoft-store-cover.jpg',
                    'trailer' => 'https://www.youtube.com/embed/Rv7xLt5yNsM',
                    'background' => 'https://images5.alphacoders.com/115/thumb-1920-1151708.jpg',
                    'sale' => 52,
                    'release_date' => '2021-11-09',
                    'developer' => 'Playground Games',
                    'rating' => 'PEGI 3',
                ],

                [
                    'name' => 'FIFA 23',
                    'price' => 70.00,
                    'description' => "O EA SPORTS FIFA 23 traz The World’s Game para dentro de campo com a Tecnologia HyperMotion2 que proporciona ainda mais realismo no jogo, com o FIFA World Cup masculino e feminino, que chegam ao jogo como atualizações pós-lançamento, a inclusão de equipas de clubes femininos, funcionalidades de cross play* e muito mais. Experimenta uma autenticidade sem paralelo com mais de 19 000 jogadores e jogadoras, mais de 700 equipas, 100 estádios e mais de 30 ligas no FIFA 23.",
                    'platform' => 'Steam',
                    'genre' => 'Single-player, Simulação, Desporto',
                    'image' => 'https://s1.gaming-cdn.com/images/products/10545/616x353/fifa-23-pc-jogo-origin-cover.jpg',
                    'trailer' => 'https://www.youtube.com/embed/0tIW1X2dv0c',
                    'background' => 'https://sm.ign.com/ign_pt/screenshot/default/fifa23-2_4ryu.jpg',
                    'sale' => 51,
                    'release_date' => '2022-09-30',
                    'developer' => 'EA Sports',
                    'rating' => 'E',
                ],

                [
                    'name' => 'The Last of Us Part I',
                    'price' => 60.00,
                    'description' => "Segue a história emotiva vivida pelas personagens inesquecíveis de The Last of Us, vencedor de mais de 200 prémios de jogo do ano. Numa civilização devastada, onde infetados e sobreviventes enrijecidos espalham o caos, Joel, um protagonista amargo, é contratado para tirar ilegalmente Ellie, uma rapariga de 14 anos, de uma zona de quarentena militarizada. Porém, o que começa por ser um trabalho simples depressa se transforma numa viagem brutal que os levará a percorrer o seu país.",
                    'platform' => 'Playstation',
                    'genre' => 'Single-player, Ação, Aventura',
                    'image' => 'https://s3.gaming-cdn.com/images/products/13298/616x353/the-last-of-us-part-i-pc-jogo-steam-cover.jpg',
                    'trailer' => 'https://www.youtube.com/embed/WxjeV10H1F0',
                    'background' => 'https://images7.alphacoders.com/360/360290.jpg',
                    'sale' => 34,
                    'release_date' => '2023-03-28',
                    'developer' => 'Naughty Dog',
                    'rating' => 'PEGI 18',
                ],

                [
                    'name' => "Uncharted 4: A Thief's End",
                    'price' => 20.00,
                    'description' => "Anos antes dos eventos de Uncharted: Drake's Fortune, Nate e Sam procuram pelo tesouro perdido do famoso pirata Henry Avery, que saqueou em 1695 o equivalente a quatrocentos milhões de dólares no assalto do navio mogol Gunsway. Os irmãos, ao lado de Rafe, infiltram-se em uma cadeia panamenha com o objetivo de acessar a antiga cela do imediato de Avery, onde Nate descobre uma imagem oca de São Dismas. Rafe mata impulsivamente um guarda da prisão quando este exige uma parte do tesouro em troca de deixá-los irem embora, iniciando uma fuga frenética em que Sam é baleado pelos guardas e Rafe e Nate fogem acreditando que Sam foi morto.",
                    'platform' => 'Playstation',
                    'genre' => 'Single-player, Ação, Aventura',
                    'image' => 'https://s1.gaming-cdn.com/images/products/8907/616x353/uncharted-colecao-legado-dos-ladroes-pc-jogo-steam-europe-cover.jpg',
                    'trailer' => 'https://www.youtube.com/embed/hh5HV4iic1Y',
                    'background' => 'https://images8.alphacoders.com/717/717109.jpg',
                    'sale' => NULL,
                    'release_date' => '2016-10-05',
                    'developer' => 'Naughty Dog',
                    'rating' => 'PEGI 16',
                ],

                [
                    'name' => "Hogwarts Legacy",
                    'price' => 60.00,
                    'description' => "Este jogo é ambientado no final do século XIX, por isso não há sobreposição com quaisquer personagens do filme e do livro, embora alguns dos fantasmas que conhece e ama possam aparecer para o guiar no seu caminho - ou para o atrapalhar e atrasar, se os irritar! Único - e central - neste jogo são os NPCs (personagens não jogáveis) Victor Rookwood (que é o tipo de líder pré-voldemort dos Feiticeiros das Trevas - precursores dos Death Eaters), o Professor Eleazar Fig, que é o seu professor e aliado, e o deliciosamente maléfico líder rebelde dos duendes, Ranrok, que não confia em nenhum humano e especialmente em nenhum feiticeiro! É um estudante prestes a iniciar o seu quinto ano que se transfere para Hogwarts a partir de outro lugar, na sequência de um misterioso acidente. Lentamente emerge que você é o possuidor da chave de um antigo segredo que poderia dilacerar o mundo feiticeiro.",
                    'platform' => 'Playstation',
                    'genre' => 'Single-player, Ação, Aventura, RPG',
                    'image' => 'https://s2.gaming-cdn.com/images/products/7072/616x353/hogwarts-legacy-pc-jogo-steam-europe-cover.jpg',
                    'trailer' => 'https://www.youtube.com/embed/1O6Qstncpnc',
                    'background' => 'https://images8.alphacoders.com/110/thumb-1920-1102284.jpg',
                    'sale' => NULL,
                    'release_date' => '2023-02-10',
                    'developer' => 'Avalanche Software',
                    'rating' => 'PEGI 16',
                ],

                [
                    'name' => "Forspoken",
                    'price' => 80.00,
                    'description' => "Misteriosamente transportada da cidade de Nova York, Frey Holland se vê presa na deslumbrante terra de Athia. Uma pulseira mágica e senciente está inexplicavelmente enrolada em seu braço, e Frey descobre a habilidade de lançar feitiços poderosos e usar magia para atravessar as extensas paisagens de Athia. Frey apelida seu novo companheiro de ouro de “Cuff” e sai em busca de um caminho para casa. Frey logo descobre que esta bela terra floresceu sob o reinado de matriarcas benevolentes, chamadas Tantas, até que uma praga devastadora corrompeu implacavelmente tudo o que tocou. The Break transformou animais em feras, homens em monstros e ricas paisagens em quatro reinos perigosos. No centro de seus domínios destruídos, os Tantas agora governam como feiticeiras malucas e enlouquecidas.",
                    'platform' => 'Steam',
                    'genre' => 'Single-player, Ação, Aventura, RPG',
                    'image' => 'https://s2.gaming-cdn.com/images/products/7111/616x353/forspoken-pc-jogo-steam-europe-cover.jpg',
                    'trailer' => 'https://www.youtube.com/embed/l06UYJftnPc',
                    'background' => 'https://images7.alphacoders.com/117/thumb-1920-1177184.jpg',
                    'sale' => 30,
                    'release_date' => '2023-01-24',
                    'developer' => 'Luminous Productions',
                    'rating' => 'PEGI 18',
                ],

                [
                    'name' => "Doom Eternal",
                    'price' => 30.00,
                    'description' => "Descobre a combinação suprema entre velocidade e potência enquanto combates através de várias dimensões no próximo grande salto nos jogos de ação na primeira pessoa.Armado com um lança-chamas no ombro, uma lâmina de pulso retrátil, armas e mods melhorados e habilidades como a corrida dupla, nunca foste tão rápido, forte e versátil.Retira o que precisas dos teus inimigos: efetua mortes Glory para receber saúde extra, incinera-os para recuperar armadura e usa a motosserra para reabastecer as munições.Uma nova experiência multijogador 2 versus 1 criada de raiz pela id Software. Um DOOM Slayer armado até aos dentes enfrenta dois demónios controlados por jogadores ao longo de três rondas de combate intenso na primeira pessoa.",
                    'platform' => 'Xbox',
                    'genre' => 'Single-player, Ação, Aventura, RPG',
                    'image' => 'https://s3.gaming-cdn.com/images/products/2669/616x353/doom-eternal-pc-jogo-steam-europe-cover.jpg',
                    'trailer' => 'https://www.youtube.com/embed/5AFbhN4NbzM',
                    'background' => 'https://images.alphacoders.com/106/1062064.jpg',
                    'sale' => NULL,
                    'release_date' => '2020-03-20',
                    'developer' => 'Bethesda Softworks',
                    'rating' => 'PEGI 18',
                ],

                [
                    'name' => "Ghost of Tsushima",
                    'price' => 40.00,
                    'description' => "O enredo do jogo é um epopéia japonesa do século XIII, com belas e detalhadas paisagens incluindo animais (pássaros canoros incluindo os dourados que o levam a não ser tão subtilmente quando se perde ou se distrai, grilos, e raposas que pode cuidar) torii gates e templos xintoístas. É o senhor samurai Jin Sakai, e tem a tarefa de repelir os invasores mongóis bem sucedidos (sob Khotun Khan, que é o neto dos aclamados Gengis) para reclamar a sua terra e vingar o insulto ao seu lar que foi invadido e tomado. No entanto, para ter sucesso, tem de tomar algumas decisões difíceis: aderir aos rigorosos protocolos honrosos dos samurais ou fazer a coisa moralmente certa? À medida que se transforma Jin, o samurai erguido, em 'O Fantasma', irá reunir uma tripulação heterogénea de aliados sobre si, e à medida que viaja, irá desvendar as suas histórias de fundo e ajudá-los a resolver os seus problemas.",
                    'platform' => 'Playstation',
                    'genre' => 'Single-player, Ação, Aventura',
                    'image' => 'https://s1.gaming-cdn.com/images/products/9093/616x353/ghost-of-tsushima-pc-jogo-cover.jpg',
                    'trailer' => 'https://www.youtube.com/embed/MUz539AeC5Y',
                    'background' => 'https://wallpaperbat.com/img/703744-ghost-of-tsushima-katana-clouds-playstation-4-k-wallpaper-hdwallpaper-desktop-ghost-of-tsushima-samurai-wallpaper-tsushima.jpg',
                    'sale' => NULL,
                    'release_date' => '2021-08-19',
                    'developer' => 'Sucker Punch Productions',
                    'rating' => 'PEGI 18',
                ],

                [
                    'name' => "Dead Space",
                    'price' => 60.00,
                    'description' => "O clássico de sobrevivência de terror e ficção cientifica Dead Space regressa, totalmente reconstruido do zero para oferecer uma experiência mais profunda e imersiva. Este remake traz uma fidelidade visual assombrosa, áudio atmosférico cheio de suspense e melhorias na jogabilidade, mantendo-se fiel à visão emocionante do jogo original. Isaac Clarke é um engenheiro comum numa missão para reparar uma vasta nave de mineração, a USG Ishimura, apenas para descobrir que algo correu terrivelmente mal. A tripulação da nave foi massacrada e a amada parceira de Isaac, Nicole, está perdida em algum lugar a bordo.",
                    'platform' => 'Steam',
                    'genre' => 'Single-player, Ação, Aventura',
                    'image' => 'https://s2.gaming-cdn.com/images/products/9094/616x353/dead-space-pc-jogo-origin-cover.jpg',
                    'trailer' => 'https://www.youtube.com/embed/cTDJNZ9cK1w',
                    'background' => 'https://cdn.wallpapersafari.com/73/2/O4AJPz.jpg',
                    'sale' => NULL,
                    'release_date' => '2023-01-27',
                    'developer' => 'MOTIVE',
                    'rating' => 'PEGI 18',
                ],

                [
                    'name' => "Days Gone",
                    'price' => 20.00,
                    'description' => "Days Gone é um jogo de ação e aventura de mundo aberto cuja história se passa no meio da natureza hostil, dois anos após uma devastadora pandemia global. Entra na pele do antigo motoqueiro marginal Deacon St. John, um caçador de recompensas que tenta encontrar um motivo para viver numa terra rodeada pela morte. Vasculha povoações abandonadas em busca de equipamento para fabricar armas e equipamento valioso ou junta-te a outros sobreviventes para tentares ganhar a vida de forma honesta… ou através de meios mais violentos.",
                    'platform' => 'Playstation',
                    'genre' => 'Single-player, Ação, Aventura',
                    'image' => 'https://s3.gaming-cdn.com/images/products/6791/616x353/days-gone-pc-jogo-steam-cover.jpg',
                    'trailer' => 'https://www.youtube.com/embed/p9XlSvnRk3E',
                    'background' => 'https://wallpapersmug.com/download/2560x1440/330b7c/days-gone-video-game.jpg',
                    'sale' => NULL,
                    'release_date' => '2021-05-18',
                    'developer' => 'Bend Studio',
                    'rating' => 'PEGI 18',
                ],

                [
                    'name' => "Horizon Zero Dawn",
                    'price' => 20.00,
                    'description' => "A TERRA JÁ NÃO É NOSSA! Conhece toda a aventura da Aloy e desvenda os mistérios de um mundo dominado por máquinas mortíferas. Após ser expulsa da sua tribo, a jovem caçadora fará tudo para conhecer o seu passado, o seu destino... e evitar uma catástrofe que ameaça o mundo. Usa ataques devastadores e mostra a tua astúcia contra máquinas e tribos rivais únicas, à medida que exploras um mundo aberto cheio de vida... e perigos.",
                    'platform' => 'Playstation',
                    'genre' => 'Single-player, Ação, Aventura, RPG',
                    'image' => 'https://s2.gaming-cdn.com/images/products/6202/616x353/horizon-zero-dawn-complete-edition-pc-jogo-steam-cover.jpg',
                    'trailer' => 'https://www.youtube.com/embed/u4-FCsiF5x4',
                    'background' => 'https://wallpapercave.com/wp/wp1897918.jpg',
                    'sale' => NULL,
                    'release_date' => '2020-08-07',
                    'developer' => 'Guerrilla Games',
                    'rating' => 'PEGI 16',
                ],

            ]);

        } else {
            echo "Tabela já se encontra preenchida";
        }

    }
}
