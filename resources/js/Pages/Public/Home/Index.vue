<script setup>
import Slider from '@/Components/Home/Slider.vue';
import Slider_1 from '@images/Home/slider-1.svg';
import Slider_2 from '@images/Home/slider-2.webp';

import FlipBox from '@/Components/Home/FlipBox.vue';

// Datos para las diapositivas
const slides = [
    { id: 1, image: Slider_1, alt: 'Slide 1', title: '' },
    { id: 2, image: Slider_2, alt: 'Slide 2', title: '' },
];
</script>

<template>
  <div class="container-home">
    <!-- Cambia el tiempo de avance con autoplayDelay -->
    <Slider :slides="slides" :autoplay="true" :loop="true" :autoplayDelay="5000" />

    <div class="flipbox-contain w-100">
      <FlipBox />
    </div>

    <div class="div">
      <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae, soluta blanditiis. Amet quasi nobis voluptas, obcaecati neque porro. Ducimus enim, excepturi quam nam dolore eos assumenda expedita veritatis architecto maiores.
        Corrupti assumenda sit ad pariatur amet possimus facilis aliquid consequatur modi aspernatur similique architecto, omnis mollitia totam provident quae repellat numquam cupiditate voluptatem et aperiam? Non maxime mollitia debitis corrupti.
        Perferendis necessitatibus velit veritatis corrupti consectetur asperiores dignissimos, facilis debitis expedita sequi officiis inventore. Velit accusamus ducimus illo eius. In adipisci cupiditate voluptatibus! Blanditiis odit suscipit cupiditate accusamus, quod consequuntur.
        Autem iure, quas repudiandae excepturi eveniet enim facilis similique maxime rem neque sint ipsum voluptatum, laudantium ducimus aliquam! Maiores inventore nisi aperiam optio porro adipisci earum corrupti nesciunt excepturi nam.
        Iste iure mollitia error. Cupiditate amet voluptatem accusamus repellendus fuga temporibus est veritatis sed aliquid maiores iure autem, architecto ipsam corrupti eveniet, neque doloribus tempore perspiciatis. Ex odio illum id.
        Enim distinctio est blanditiis repellendus vel nobis, ipsa nam fuga ipsam error atque nostrum perferendis aut sed vitae reiciendis aspernatur animi hic ipsum. Reprehenderit, fuga voluptates? Sint veritatis neque saepe.
        Ipsa quae deserunt maiores ducimus consectetur, veritatis eveniet, ut explicabo temporibus incidunt minima reiciendis iusto cumque repudiandae sequi aut mollitia nobis tenetur dolorem nam voluptatum placeat. In obcaecati deleniti dolores.
        Quasi excepturi hic beatae odio fugiat dignissimos, libero laborum. Dolores vero sint excepturi exercitationem, corporis ut, tenetur obcaecati saepe asperiores ipsam necessitatibus sequi ratione reiciendis nam non. Facilis, modi cum?
        Deleniti necessitatibus perferendis ab neque dolorem suscipit ut commodi recusandae! Eligendi alias adipisci ipsa aut, hic animi commodi autem totam expedita, cum nam obcaecati. Quis expedita excepturi qui saepe assumenda.
        Incidunt modi vero debitis earum laboriosam? Deserunt, qui nulla. Molestiae natus explicabo maxime adipisci, accusamus ex, exercitationem quisquam officiis repellendus ut minima alias sint error nobis perspiciatis dignissimos ratione delectus!
        Quaerat fugiat cupiditate, hic ut minus impedit, mollitia harum, ipsa ea molestias ratione possimus. Quos eum vero reprehenderit beatae ut cumque cum nulla, ipsam quia totam fuga debitis, at magni!
        A, laudantium molestias, numquam ipsa quos dignissimos libero excepturi deserunt, quisquam provident corporis! Ipsa sequi itaque ipsum eos atque cum distinctio ut voluptatibus illum corrupti iure quidem officia, vitae laudantium.
        Repellendus cupiditate maiores quam laborum ab. Nostrum tempora dignissimos quaerat amet ut reprehenderit illum dicta, eligendi ipsa? Blanditiis, nam et fugit exercitationem mollitia libero totam. Explicabo expedita nobis quos iure!
        Impedit, deleniti praesentium, qui iste perferendis debitis voluptatum nemo tempore ipsa, itaque sed ratione? Consequuntur tempore quas laborum, repellat alias earum optio voluptatibus aut ab asperiores tenetur rem architecto vero.
        Eos minus tenetur temporibus minima vero error possimus obcaecati dolore? Ut possimus ex iure, minus consequuntur voluptatem ea fugiat voluptate animi, aut odit quos, velit quia. Pariatur tenetur quia autem.
        Quaerat ex voluptatem vitae at natus illum nesciunt enim hic inventore temporibus repellendus qui distinctio dicta optio ab aspernatur a incidunt expedita, soluta voluptatibus. Iure saepe omnis numquam placeat consequatur.
        Iste similique sunt assumenda minima quisquam esse corporis accusamus perferendis itaque aliquam veritatis, et commodi ipsum, iusto dolorem temporibus architecto ipsa eaque labore error deserunt praesentium recusandae vitae sequi. Ab.
        Soluta, earum alias quo, dolore saepe illum illo doloribus perspiciatis cupiditate enim voluptatibus assumenda totam rem, ipsa voluptas nostrum accusantium laboriosam. Quos saepe aut quasi illum culpa sapiente eveniet aliquam.
        Placeat aperiam dolorum maxime ut natus eaque fugiat incidunt iusto voluptatibus quo a possimus sunt error quis doloribus quod autem eligendi quibusdam, fugit impedit labore odio. Magni, reprehenderit! Neque, tempore.
        Totam recusandae repellendus quos ipsum iure optio ea magnam mollitia perferendis eligendi. Quos voluptas doloribus et explicabo laboriosam, dolorum quae ipsum corporis laborum, accusamus nostrum odit eaque sit id maxime.
        Dolorem repellat alias recusandae minima commodi dolorum odio, ab explicabo ad incidunt illo enim ipsa quam repellendus magnam officia mollitia et tempore. Maiores sequi ratione harum, asperiores iusto illo impedit.
        Facilis porro magni error in, itaque sit officiis deleniti placeat, consectetur, vel ad fugit assumenda voluptatem! Eius, aperiam! Perferendis recusandae tempora sapiente laboriosam nesciunt rerum ipsum eaque tempore, voluptas ratione?
        Et, ipsa consequuntur tempore eius quis id quam at voluptatem veritatis sunt voluptatum quo eos qui sit itaque illo repellat! Laboriosam eveniet saepe officiis in necessitatibus quibusdam numquam temporibus aspernatur?
        Magnam nihil fugiat, tempora consectetur accusantium esse fugit sed amet autem eaque? Porro, illum veniam nobis voluptatibus modi in possimus, itaque ad perferendis eos iure optio eaque pariatur ullam neque.
        Ipsa rerum cupiditate, maxime nihil quae dolor quo fugit! Deleniti, ipsum repellendus iusto veritatis quidem alias odit labore hic, tenetur ipsam voluptatem! Quam iure ullam esse saepe amet dolorum sapiente.
        Deserunt possimus dolorum quibusdam laboriosam non alias ducimus dolorem molestiae delectus similique! Molestias, quaerat quo. Inventore, voluptates in cumque molestias ipsa, magni reprehenderit eius soluta cupiditate numquam dolorum impedit repudiandae.
        Labore blanditiis, ut explicabo quia dolores reprehenderit. Natus incidunt quaerat ex ratione consequatur, voluptates provident inventore possimus exercitationem error optio, quo atque? Quasi accusantium aspernatur explicabo ex vitae vel sint!
        Consequatur vel a nemo! Voluptatem fugiat nesciunt porro exercitationem cupiditate cum quisquam, ut neque error veritatis voluptates dolore quod earum debitis deserunt quasi rem dicta quidem quia maiores? Corrupti, nam.
        Commodi corrupti, laborum obcaecati ab explicabo necessitatibus. Necessitatibus, impedit quasi consectetur nam, perferendis inventore reiciendis esse fugit earum molestiae eligendi laborum debitis tempora architecto nihil ipsam ab rerum dicta perspiciatis?
        Ullam dignissimos adipisci saepe id libero dicta, eius consectetur unde culpa incidunt sapiente error in minima numquam dolores cupiditate magni nisi vitae accusantium quibusdam iure delectus! Eveniet sequi magnam sunt!
        Alias modi quisquam facere nisi in delectus tempore amet aliquam est, officiis non voluptate repellat, quam exercitationem doloribus. Excepturi ut facere quasi, sed recusandae eligendi id beatae rem odit porro!
        Et nostrum voluptas fuga, necessitatibus magnam vero exercitationem consectetur ut impedit! Quae vitae dolorem fuga distinctio ullam minima reprehenderit dicta unde, blanditiis asperiores commodi, tempora deleniti quo explicabo, numquam aspernatur.
        Vero dignissimos, iusto reprehenderit sunt perspiciatis commodi, odit nostrum totam ipsam minus sit, pariatur sint! Reprehenderit cupiditate, reiciendis aspernatur eum, totam nobis facilis placeat provident harum distinctio sit rerum quam.
        Officiis iusto at libero enim! Dolores asperiores expedita atque? Laboriosam incidunt sed hic ducimus molestias animi magni vero quas libero minus. Dolor praesentium, suscipit adipisci assumenda corrupti dolorum magni animi.
        Ea iusto, blanditiis consequatur animi sed temporibus totam assumenda veritatis cumque est nam id nobis reiciendis accusamus nisi quia adipisci eos officia dolorum delectus! Esse voluptates saepe nihil praesentium quasi?
        Dicta ducimus, ex quaerat, nisi ea odio mollitia impedit hic, consequuntur aspernatur autem sint nobis beatae dolorem soluta minus recusandae placeat. Nobis ipsum deleniti provident nulla optio necessitatibus, ullam excepturi!
        Enim in, voluptates quis atque fuga fugiat illo error dolor impedit! Eaque cumque amet officia quaerat placeat minus, id quibusdam quia sapiente. Vel, reiciendis voluptas quae porro quibusdam iste pariatur.
        Nesciunt blanditiis ex vel ducimus cupiditate. Omnis ducimus repellendus fuga. Ipsa tempore inventore temporibus aliquid adipisci reiciendis minus laborum quaerat iusto dolores, corporis maiores est, facere numquam sit odio atque!
        Doloremque nesciunt neque eveniet doloribus ipsa asperiores nisi beatae eius nostrum cumque. Molestias ad quo veniam ut, placeat corrupti explicabo quibusdam quos eveniet asperiores quod maiores? Expedita praesentium hic ducimus!
        Non hic itaque magnam. Tempora aliquam et ullam, fugiat distinctio beatae quibusdam nulla nobis ratione, voluptatum facere repellat fuga autem iusto earum. Reiciendis et in sunt earum iusto saepe asperiores?
        Possimus, quia. Distinctio dignissimos cum mollitia voluptatem exercitationem, ad dolores nam in maxime minus! Ratione obcaecati quibusdam dolore, qui doloremque asperiores, aliquid saepe similique excepturi odio libero soluta veritatis voluptatem!
        Distinctio labore voluptas, dolorem animi perferendis doloremque et facere perspiciatis quod mollitia consectetur ipsa sint totam maxime iste ea accusantium alias minima sit dignissimos quia laborum reprehenderit. Laborum, quam earum.
        Quidem odio quaerat mollitia ad ipsam vitae laboriosam voluptates, modi harum aut necessitatibus culpa sapiente laudantium unde adipisci est iusto commodi numquam praesentium assumenda aliquam cumque illum id quia! Quas.
        Accusantium accusamus, quidem dignissimos eos deserunt labore officiis dolorem consectetur suscipit repudiandae placeat officia, reprehenderit adipisci voluptate odio ratione! Ipsam laudantium, eligendi voluptas at cupiditate in nisi praesentium iure tempore.
        Libero temporibus molestiae earum ab natus dolore maxime eaque ducimus deserunt sequi molestias praesentium, sapiente itaque quia ea voluptatibus blanditiis velit soluta recusandae? Incidunt molestias fuga eius natus quidem aperiam.
        Dolores veniam debitis quibusdam amet officiis qui molestias minima! Culpa, ipsum fuga aliquid nihil at obcaecati eaque eveniet harum, qui officiis nulla, non quis quos explicabo rem praesentium possimus reprehenderit?
        Omnis cumque in minus saepe, eos error magnam ratione exercitationem ullam nihil esse. Corrupti ex perferendis, in odit a commodi dolor repellat enim exercitationem reiciendis recusandae ipsa saepe! Vero, natus!
        Quisquam officiis hic facere magnam at, cupiditate molestias eaque cumque doloremque asperiores ipsa doloribus laudantium saepe nisi praesentium provident inventore architecto nihil, optio temporibus nam! Numquam quis commodi similique. Assumenda.
        Consequuntur, vel maxime maiores iste illum in distinctio nesciunt saepe laboriosam aliquid architecto provident magnam veniam eius suscipit doloremque nostrum beatae voluptates qui. Laborum nisi modi commodi doloremque. Nobis, officia!
        Fugiat eaque, suscipit quo consectetur consequuntur nam exercitationem cum tempora? Quae fuga pariatur minus doloribus aspernatur. Nemo repellat nesciunt, numquam tempore odio odit quod aut. Itaque officiis optio laborum modi!
        Voluptatum optio alias consequatur dignissimos dicta ut magni est, quisquam soluta, facere, dolorem in aliquam aperiam animi tempora ipsa eligendi voluptatem. Maxime cumque aliquid inventore autem, nam veritatis repellat porro.
        Molestiae quidem consequuntur aperiam? Aperiam, exercitationem? Officia velit cumque, ut minus ea doloremque inventore repudiandae vitae saepe dolorem repellat harum illo, accusantium hic eveniet aliquid nobis quisquam perferendis veniam omnis!
        Dolorem non voluptate ratione exercitationem. Tempora necessitatibus recusandae provident rem veritatis modi iure. Nostrum, rerum aperiam accusamus delectus autem debitis similique tenetur fugit, harum, velit exercitationem cum! Quasi, quisquam inventore.
        Nesciunt reiciendis ipsam odio voluptates, id mollitia sequi nostrum, eligendi perspiciatis repellendus in culpa tempore provident. Praesentium blanditiis numquam, velit necessitatibus, voluptate nobis molestias iusto, culpa tenetur rem nam tempora?
        Molestias nulla dicta beatae quaerat nihil unde corrupti fuga atque neque magni aut, mollitia, distinctio amet debitis sapiente nemo asperiores commodi earum ipsam necessitatibus. Necessitatibus, sed incidunt. Delectus, ipsam repellat.
        Totam quod magni dolor voluptatem et nemo dignissimos neque quidem sed ipsa? Labore officia velit saepe? Harum inventore corrupti corporis omnis ipsam, exercitationem ex, qui deleniti rem eveniet quidem quibusdam?
        Fugit ad voluptatibus fugiat delectus, aliquam repellendus animi beatae dolorum ex, dignissimos eligendi iure ullam in distinctio. Molestias labore pariatur nam odit incidunt repudiandae delectus amet, deleniti vel sequi vero.
        Distinctio architecto animi, voluptates, expedita tempore non debitis soluta adipisci, vero quam magni aliquam maiores! Quidem aspernatur iure atque beatae obcaecati, nam et itaque perferendis assumenda accusamus corrupti debitis modi.
        Cupiditate, beatae soluta saepe omnis quisquam fuga laudantium nostrum reprehenderit? Blanditiis reprehenderit quidem odit, eligendi pariatur aspernatur, architecto commodi obcaecati culpa animi saepe fugiat dicta numquam totam esse ipsum! Nostrum.
        Deserunt, vel hic delectus sint, recusandae id at distinctio accusantium sapiente accusamus mollitia cupiditate corporis exercitationem reiciendis cum. Illum amet, sit totam assumenda eius dicta vero fuga veniam corrupti accusamus!
        Facilis harum deserunt vel accusamus officia nobis ipsam ratione fuga pariatur, alias iste recusandae quod necessitatibus, obcaecati laudantium nulla, maiores dignissimos quaerat id odit sed facere velit. Numquam, sunt cupiditate.
        Nemo laborum quas molestiae commodi officiis necessitatibus doloribus magni dolor minus officia labore quasi magnam cumque aperiam rerum distinctio pariatur sed cum, architecto ut numquam! Sequi facilis esse eos quibusdam!
        Totam, cupiditate quidem dolores non nesciunt minima corporis sapiente praesentium tempora qui libero laboriosam perspiciatis molestias odit officia quibusdam expedita assumenda pariatur sunt nostrum inventore earum exercitationem voluptates. Quod, cum?
        Similique enim tempora odio. Voluptatum, adipisci architecto veniam expedita non sed? Magnam exercitationem at ipsum totam dolore tenetur fugit maxime voluptatem omnis iste! Sequi dolores reprehenderit est distinctio inventore nam?
        Itaque iure porro corrupti mollitia tenetur est architecto recusandae, accusantium adipisci laudantium commodi atque, voluptatum voluptatem quas. Dolor ex, commodi, illo explicabo minima quasi voluptas consequatur, sequi soluta et impedit.
        Aut dolore omnis maxime. Accusantium quo doloremque modi? Impedit, amet veniam tempora voluptates nisi qui reprehenderit repellat nemo delectus ullam? Est quasi iure architecto vero sequi illum quam accusantium voluptatum?
        Magnam aspernatur eius alias dignissimos architecto laudantium, eaque asperiores recusandae laboriosam, tempore rerum magni cumque, voluptates ex quae earum animi ab cupiditate dolores? Ipsa beatae vel veniam necessitatibus aliquam atque.
        Vero quo sequi quaerat dolorem repellendus perspiciatis voluptatem voluptatibus, dolor repudiandae velit suscipit commodi facilis laboriosam ab consectetur beatae vel? Soluta sequi ipsum labore eaque sed pariatur! Distinctio, eveniet molestiae!
        Numquam eius in aut reprehenderit perspiciatis cumque odit, alias placeat, deserunt nihil nostrum atque, sunt tenetur dicta nulla itaque saepe dolorem consequatur doloribus fuga perferendis cum. Ea asperiores vel modi.
        Laboriosam corporis magni optio non rem exercitationem explicabo cum. Odio eveniet laboriosam atque magnam, natus reprehenderit beatae quos quam deleniti neque illo! Nobis repellendus saepe consectetur maiores laborum quisquam voluptates?
        Adipisci incidunt quia ipsum quam corrupti aliquid excepturi dignissimos dolorum quas ullam, reprehenderit officiis. A vero minima sequi, fugiat error doloribus velit ad aspernatur obcaecati repudiandae dolores suscipit dolor praesentium.
        Quas, provident nisi molestiae sit eos ab! Officia, reprehenderit possimus. Officiis molestiae itaque commodi expedita non debitis perferendis harum ullam sint aut praesentium, tempore facere doloremque voluptatum eum doloribus nulla.
        Distinctio nisi ipsam aut ipsa delectus vero enim quibusdam repellendus eveniet minima voluptate quasi nobis ex tenetur nemo, dolorem, accusamus reprehenderit? Consequuntur explicabo tempore quasi at id doloremque quo voluptas!
        Repellendus soluta eligendi placeat. Explicabo cum aperiam praesentium, facere maxime debitis rem alias suscipit sequi sed eos, similique nihil exercitationem error cumque esse aspernatur beatae nemo corporis. Tempora, praesentium esse.
        Debitis, nisi impedit alias modi quia eum corrupti mollitia ducimus! Laborum nulla odit ipsa earum iste et reprehenderit ea ad cum amet, maxime eaque eligendi, impedit dolor natus maiores! Optio?
        Esse libero labore officiis facilis ea similique. Quasi nisi at non dicta vero minima aliquam in omnis. Similique laborum error harum vero, quidem officia nobis! Nihil, accusamus? Ipsum, id blanditiis!
        Nobis, sequi! Non similique aperiam libero deserunt, placeat id? Quod quisquam, rem vitae nulla consequuntur placeat accusamus soluta qui praesentium magni cupiditate asperiores enim? Praesentium expedita laborum veniam ad nulla.
        Voluptatem laboriosam ut veniam ipsa, voluptate eveniet, animi minima earum, vel sed quidem exercitationem ipsum laborum porro. Veniam, dolore hic? Architecto ad laborum assumenda id. Ratione consectetur dolorem sapiente aliquid?
        Enim assumenda aut ab dignissimos unde distinctio deleniti natus, laborum non dolorum illum amet nobis, alias cupiditate fugiat voluptates reprehenderit sunt, ipsa soluta in? Dolores harum quibusdam natus delectus iusto?
        Accusantium possimus et ipsum quo. Itaque quibusdam sunt dolores. Consequatur labore ipsum dolorum, modi velit architecto debitis quasi voluptatum molestias nisi laborum asperiores mollitia iure cumque unde illo consectetur ipsa?
        Ullam eaque quas assumenda rem esse earum nesciunt, laudantium beatae, hic dignissimos maiores voluptate explicabo accusantium cumque cum ducimus aspernatur adipisci? Quos rem omnis sequi ducimus itaque expedita, nostrum necessitatibus.
        Eos, amet magnam? Laborum ipsum, dignissimos quod, sunt exercitationem debitis corrupti quae at eaque ab repellendus repudiandae et beatae ad eos! Voluptate ducimus ex ipsa rem omnis quos iusto soluta.
        Sit adipisci dolor odit itaque magnam iure excepturi sint eum, fugiat nam at culpa necessitatibus nobis neque ipsa dignissimos ratione omnis aperiam quis labore minima est veniam quibusdam unde? Accusamus.
        Aut, voluptatum nostrum. Architecto minus aliquam sit labore exercitationem cupiditate fuga voluptates quis assumenda ab! Commodi eaque, ad deserunt minima eos error ab. Fuga harum, iste quisquam error libero itaque.
        Sint laborum iste earum nobis temporibus deserunt, quas architecto consequuntur delectus illo impedit eligendi exercitationem fuga eos ab ullam est optio. Non, eum pariatur nobis tempore nam exercitationem! Minus, quam!
        Necessitatibus, quae adipisci vel tempore totam molestias nam libero qui dolor pariatur velit. Inventore, quo autem dolor id quae, eos porro nihil, quis laboriosam placeat sint velit laudantium modi sit!
        Architecto, quae? Obcaecati beatae nemo alias sequi harum. Doloremque deserunt impedit esse. Rerum atque, magni sunt ad dignissimos harum reiciendis iste adipisci a eaque ipsam fuga mollitia voluptatem pariatur necessitatibus.
        Odio inventore, laboriosam iure nam culpa repellendus alias soluta ut? Facere earum fugiat ea ducimus commodi reprehenderit quae, voluptatum odit, consequuntur ipsa repudiandae aperiam officiis, animi minima illum esse? Quis!
        Provident asperiores fugit ab impedit obcaecati sit eveniet quibusdam. Debitis at, sit quaerat quasi perspiciatis expedita non veritatis magni accusamus voluptate nobis ullam libero reprehenderit earum quidem corporis adipisci? Sint?
        Placeat soluta enim dolorem, sunt reiciendis eius ex sapiente adipisci quaerat? Qui quam exercitationem quibusdam, omnis perferendis cumque ex temporibus facilis. Laudantium ex excepturi ducimus incidunt iure error harum dolor.
        Modi illo ut iste atque facere laboriosam dolorem placeat? Velit, rem expedita reiciendis hic molestiae esse deserunt corporis dolorum eius similique, quibusdam nihil? Perferendis quidem mollitia earum, dolore nihil optio.
        Minus sapiente magnam, fuga, consequatur laboriosam earum vel, repellendus dolore a molestias qui ex repudiandae architecto assumenda quo ab sit esse necessitatibus. Rerum, nostrum! Fugit saepe ut veritatis ducimus rerum?
        Nihil, rem. Consequuntur soluta eaque maiores libero nulla amet corporis ipsam praesentium delectus aliquam iure non unde accusantium doloremque dolorem assumenda ratione sapiente deserunt, necessitatibus optio quasi ad. Itaque, omnis.
        Reiciendis provident tenetur labore, explicabo veritatis nulla accusantium minus ex vero expedita aut soluta corrupti ratione esse aperiam magni eaque, illo cupiditate? Placeat, repellat explicabo! Voluptatibus alias minus maxime id.
        Debitis suscipit ab impedit expedita laudantium corporis, excepturi esse quod, cumque dolore perferendis recusandae modi magnam ea vel adipisci sint eligendi quidem repellendus! Dolor unde facere provident quas, illum laborum!
        Laborum animi voluptatum laudantium repellendus non saepe numquam, odit natus laboriosam quos totam ullam quo quaerat amet, repudiandae, fuga nisi maiores excepturi ducimus similique. Ad nisi sed beatae reiciendis officiis.
        Ducimus, animi sit, cupiditate provident ad adipisci, dolor nisi porro natus saepe vel quam maiores repellendus. Aperiam, dolorum possimus quis iure tempora aut quaerat enim ut officiis quae soluta neque?
        Repudiandae voluptatum ipsum error eveniet facilis accusantium iste quia libero veniam dolorum modi eum vero atque nemo sequi, ullam recusandae consequuntur officia porro earum, laudantium, natus aut rem. Sed, vel!
        Libero praesentium aliquid sapiente porro eos alias at cumque delectus eum sint recusandae omnis, dignissimos obcaecati aliquam asperiores dolores quidem laborum voluptatibus maiores eveniet? Maiores officia omnis incidunt nihil provident.
        Nobis tenetur at eveniet voluptatem cupiditate qui debitis minima architecto illo enim amet fuga rerum, in optio molestias odio, provident nam autem porro pariatur sequi vel adipisci. Ipsa, eos vero!
        Facere deserunt doloremque velit magnam reiciendis cumque id fuga dolores labore ratione eligendi saepe nulla tempore amet esse, necessitatibus tenetur optio? Deserunt exercitationem fuga quisquam natus, assumenda perferendis officia! Inventore?
        Magnam, facilis dicta soluta eveniet maxime eius voluptatum ab suscipit doloremque? Veritatis, necessitatibus explicabo modi repellat esse beatae porro, eius rerum sapiente magni quod magnam ullam maxime maiores dolores odit?
        Dolorem, magni unde quis molestias quae distinctio eligendi minima pariatur necessitatibus natus quidem quam autem qui ratione at minus deserunt quaerat nihil eveniet itaque. Nihil reprehenderit quam enim possimus? Impedit?
        Ratione ducimus labore, sint alias illum iusto voluptate qui earum incidunt mollitia autem vitae cumque obcaecati vel illo quis asperiores molestiae distinctio neque. Non labore ipsa sit numquam quasi provident?
        Commodi praesentium reprehenderit, non soluta quos animi recusandae aperiam nesciunt, saepe placeat vel alias velit magnam officia quam dolore exercitationem magni dolor odit laboriosam, ad eos blanditiis? Aliquid, ex vitae.
        Debitis quod vel quasi aut odit similique, nisi id ipsa corrupti saepe nostrum fugiat architecto maxime eligendi beatae nam provident praesentium ipsum ab repellendus rem reiciendis officia? Dignissimos, magni provident!
        Reiciendis, iure cupiditate assumenda accusamus laborum blanditiis magnam ullam ducimus atque repudiandae animi magni itaque distinctio in quod sapiente debitis possimus, nobis molestiae dignissimos numquam! Itaque autem officiis vitae maxime.
        Praesentium delectus, aut neque maxime optio possimus laboriosam, quis magni quasi deserunt corrupti. Labore numquam, officiis beatae asperiores voluptatum, accusantium dicta, sequi illo iusto fuga obcaecati soluta reprehenderit saepe a.
        Amet unde iusto repudiandae cupiditate quasi reiciendis harum officiis! Voluptates repudiandae, natus odio iste totam sit culpa, illum minima quas sint consequatur aperiam neque voluptatem nihil adipisci velit, reprehenderit eum.
        Non, consequatur nihil et, molestiae doloremque officiis aut nulla quibusdam mollitia, iusto fugit laudantium esse commodi aperiam recusandae enim. Sequi dolorem laboriosam incidunt itaque vitae facilis, cupiditate nihil praesentium numquam.
        Fuga ab deleniti earum nesciunt harum labore porro eos architecto, quas ex commodi, quaerat excepturi error reprehenderit accusantium explicabo itaque optio tempore! Sunt sit asperiores dolorem quo hic, maxime fugiat!
        Libero natus repellendus, optio, deserunt odit repudiandae corporis quam iste ex ipsa animi totam facere consequatur voluptates! Explicabo voluptatum voluptatibus ipsam in iste nobis vero hic est, ad quae repudiandae.
        Commodi distinctio adipisci excepturi eius doloremque, voluptates, doloribus consectetur ad voluptatum, a atque exercitationem et beatae? Voluptatum veritatis aliquam voluptatem quae quisquam dolor distinctio nisi doloribus doloremque, deserunt saepe eaque.
        Quaerat possimus repudiandae dolorem non eaque, praesentium dignissimos, voluptatibus eum similique doloremque unde dolore distinctio minus neque saepe accusantium aperiam, enim rerum. Nulla ex explicabo in et, eos quas officia.
        Repellat, amet reiciendis. Reiciendis, minus! Facere voluptatibus consequuntur excepturi ab dolorem maiores soluta odit nobis, quas iste. Perferendis quae commodi, accusamus blanditiis optio iste, in deserunt excepturi voluptas, at quisquam.
        Excepturi iure earum impedit maxime ab? Saepe autem non animi. Et numquam impedit mollitia tenetur! Laudantium, maxime vitae facilis amet minus, perferendis totam, itaque obcaecati officiis at rem ipsum dolor!
        Sed mollitia nostrum facere temporibus magnam iste quo amet? Repellendus error odit amet aliquam culpa enim et animi, non, molestias neque modi impedit ab reprehenderit vero nisi. Veritatis, facere quae?
        Nobis porro dignissimos dolor tenetur vitae, ipsa magnam voluptas excepturi quibusdam temporibus facilis beatae rem ex mollitia eum maxime dolore saepe molestiae placeat ea sequi. Voluptatem unde assumenda beatae nobis?
        Quasi quas deleniti officiis, eum at possimus illo culpa placeat necessitatibus nihil dolorum doloribus modi. Ullam velit nisi tempore consequuntur ratione aliquam minima quo amet at. Laudantium tempore nobis minus!
        Ipsum soluta rem, harum amet recusandae aperiam nam adipisci asperiores similique autem tempore, minus atque enim sequi! Sunt maiores incidunt, debitis dicta totam illo facilis! Nam quo distinctio voluptatum atque.
        Expedita, fuga. Veritatis perferendis culpa consectetur natus nulla quae modi accusamus earum nobis sunt! Molestias laborum labore velit molestiae reprehenderit cupiditate, ipsum iusto! Nam commodi atque tempore totam facere voluptas!
        Ex amet esse, iusto autem ut nam! Nam, consequatur obcaecati! Itaque eligendi explicabo velit accusantium laboriosam facilis totam ab? Exercitationem, necessitatibus doloremque facere voluptas ab incidunt quisquam ad. Voluptatibus, cum?
        Quasi sit ea pariatur optio possimus deserunt magni necessitatibus est nobis, explicabo maiores odio beatae ex amet fuga modi minima in voluptates, dolor quia aspernatur quo reprehenderit dicta doloribus. Repellendus.
        Rem dolorem suscipit natus, eaque, velit quidem, voluptas est doloremque facilis dicta sunt repellat. Voluptate facere tenetur consequuntur nesciunt deleniti nulla ducimus eum est vel? Officiis ipsam incidunt totam eveniet?
        Inventore nihil iusto explicabo autem, corrupti doloribus cum delectus repudiandae saepe, quia, nisi eveniet suscipit in possimus animi? Incidunt, earum aliquid delectus iste a placeat pariatur nihil eligendi perferendis eius?
        Dolorem, ipsa aliquam. Eius culpa quibusdam neque laudantium harum! Excepturi iusto in quasi esse repudiandae. Fugiat pariatur deserunt perferendis iure impedit temporibus repellendus similique repellat. Eum quae dolore molestias fugiat.
        Dolorem id odio ipsa repudiandae magnam itaque, quae, ex fugiat incidunt eligendi ea sed laudantium a tempora. Illo eum magnam, magni laudantium nostrum ipsam iusto ullam hic molestias natus quaerat.
        Rem, labore cum sapiente beatae laboriosam tempore eum dolores quibusdam atque nesciunt magni, incidunt consequatur harum blanditiis. Quaerat aperiam consequatur unde. Officia aut harum sapiente debitis tempore, voluptatibus nemo vitae!
        Sint cumque debitis rem necessitatibus vero maiores? Veniam, nostrum aliquam. Non sunt asperiores assumenda eum amet numquam iusto corporis tempore consectetur, provident dolorum unde nisi vel ex minima ut! Architecto.
        Vero reiciendis nostrum architecto officia doloremque neque accusamus unde cupiditate optio fugit earum aut similique maxime ea nobis deserunt accusantium cumque tempore magnam quis, error a itaque in delectus? Eum.
        Dignissimos, deserunt! Nostrum laboriosam quaerat quae itaque dignissimos illo distinctio sapiente, magni vitae repudiandae quam commodi excepturi culpa, reiciendis veritatis mollitia doloribus doloremque expedita alias eveniet, recusandae optio. Aliquam, qui?
        Repellendus, vero asperiores aut veritatis repudiandae ducimus amet quidem repellat nemo non impedit eum perspiciatis quis ea perferendis, alias eligendi! Perspiciatis iste nemo doloribus dolores porro eius accusamus quia ipsa!
        Placeat necessitatibus maxime nulla consequuntur rerum, pariatur molestiae omnis sed, excepturi, velit vero dolores tempore quibusdam expedita earum? Eaque consectetur facilis, eligendi illum enim officia beatae neque nobis hic consequatur.
        Deleniti quod inventore ipsam adipisci! Aut totam ab id impedit corrupti blanditiis sint explicabo consectetur, consequatur et architecto quos amet eveniet, harum maxime voluptas mollitia, illum voluptatem deleniti expedita hic.
        Magni accusantium quis odit sint iusto voluptas minima! Quae, laboriosam est iusto, corporis sit perferendis enim accusantium fugit recusandae provident impedit consectetur, quisquam quia! Animi quasi eius ipsa sapiente veniam?
        Quasi distinctio sapiente voluptatum, neque vero pariatur consectetur, ullam, autem ratione consequuntur saepe nemo itaque modi beatae. Laboriosam neque ut, nemo quos ipsum sunt sapiente, voluptatibus quae, deserunt accusamus sint!
        Cupiditate blanditiis rem et ipsam nobis ad dolorum facilis maiores veniam asperiores atque laudantium ut iste sed necessitatibus dolores, incidunt velit consectetur odio ea. Commodi numquam minus provident eligendi quasi.
        Sint quae perferendis delectus quos reprehenderit ipsam deleniti veritatis ex. Ipsam odit dolores fugit facere perferendis explicabo, nulla aperiam. Reiciendis id, esse perferendis dignissimos architecto dolor dolorum possimus neque aliquam!
        Enim reprehenderit ipsum vel temporibus pariatur iure eos omnis. Culpa id dolore optio vero esse dolor omnis, quidem, earum beatae blanditiis modi, sapiente temporibus consequatur explicabo? Voluptas consequatur minima nulla.
        Vero eaque adipisci corporis atque officiis quas mollitia fugiat sit quidem, nesciunt repellendus aliquam sint molestiae earum nisi in fugit provident voluptatibus, quam repudiandae temporibus alias dolor voluptatum amet! Eaque!
        Adipisci placeat repellendus ut consequatur consequuntur eos tempora recusandae quaerat accusamus, atque deleniti modi unde corporis optio porro cumque ullam sequi officiis corrupti. Maxime culpa magnam mollitia sequi molestias pariatur.
        Molestiae eos molestias, voluptate fugit illum est modi veritatis placeat eaque? Culpa veritatis hic ipsam neque labore doloremque odit, placeat incidunt, quidem nihil enim quibusdam optio perspiciatis explicabo consequatur quas?
        Eos ipsam magnam amet rem similique. Impedit praesentium ipsa ipsam quod molestias alias repellendus magnam consequuntur blanditiis? Accusamus et aliquam, dignissimos magnam eaque ut sequi, impedit eos, molestias fugiat corporis.
        Minus perspiciatis optio nulla voluptatibus iste, non, alias doloremque aperiam, voluptas tempore at quidem tempora eveniet necessitatibus. Itaque at iusto saepe maxime similique dolorum, reiciendis ipsa suscipit veniam exercitationem inventore.
        Similique, magni. Cumque voluptatum tenetur, iusto nisi ut culpa iure similique, molestiae quo natus nobis molestias explicabo doloribus ea voluptas? Iusto totam perspiciatis dolorum quidem sed architecto quod, provident facilis!
        Sapiente ducimus similique itaque quas laborum quisquam qui nesciunt ullam quidem provident praesentium deleniti reprehenderit dolores earum, iste vitae nulla, sunt amet suscipit neque doloribus ab ipsa delectus cupiditate! Nemo.
        A, eaque sint omnis expedita modi, ducimus incidunt cupiditate vero fugiat soluta libero nihil amet at dolores assumenda possimus enim deserunt! Distinctio quia nobis vel aut nulla pariatur ullam earum.
        Vitae repellat doloremque consectetur! A nam voluptatum inventore accusantium, magni, autem totam quo eligendi ipsa at nobis beatae quos impedit perferendis fuga quae quia ratione corporis. Quis vero nostrum unde.
        Necessitatibus, obcaecati iusto labore fuga facilis culpa minima facere non aliquid earum molestias, aut nihil minus amet, illum enim? Ducimus aliquam ea ipsum voluptatum. Dolorum sed illum voluptas earum quae.
        Ex iste laudantium mollitia porro iure necessitatibus autem animi, aperiam commodi tenetur expedita illum sit incidunt quod eius, labore quibusdam eaque. Non suscipit eligendi quidem minus quaerat neque, est laborum!
        Necessitatibus molestiae ducimus earum recusandae voluptas commodi, cumque doloremque libero dicta, obcaecati distinctio cupiditate veniam, nihil minima corrupti aspernatur sunt! Quia pariatur dolores consequuntur unde, laudantium nobis doloremque delectus nihil?
        Labore cupiditate est ut voluptatibus numquam esse porro consectetur, vel fugit maxime assumenda aperiam ea deserunt illo vitae qui itaque nisi voluptatem ullam quidem. Dolorum maiores ducimus cumque assumenda nesciunt.
        Error, optio cupiditate. Doloremque illum laborum nulla beatae velit officiis quia cum, in, eius corrupti, voluptate repudiandae recusandae voluptatem dolore? Ut libero alias nulla natus dignissimos aspernatur repellendus beatae est.
        Exercitationem quam sunt quos reiciendis laudantium a amet! Quod dolor voluptatum nulla placeat, nisi exercitationem vel ratione rerum optio quia nobis deleniti architecto itaque ab totam error mollitia eius hic!
        Ea provident nihil tempore expedita voluptates animi eum porro accusamus, quia tenetur consequatur magnam asperiores dolores repudiandae ex necessitatibus nemo amet quaerat, officia veritatis doloremque! Ipsam obcaecati id iusto temporibus.
        Aperiam recusandae nesciunt ipsa cupiditate, praesentium officia quam eius dolor dolorum sequi ad vitae tempora itaque maiores, reiciendis quos similique illum vel quae ab animi id veniam? Quaerat, voluptatum provident?
        Harum placeat doloribus omnis, vel corrupti ratione unde assumenda adipisci. Sapiente, maiores quia architecto fuga explicabo ratione. Debitis veniam placeat quos harum eius tempore inventore iusto est, cum, voluptas architecto?
        Blanditiis odit, at vitae hic repellat omnis! Nostrum, sit deleniti eum nobis quasi doloremque voluptatem saepe voluptatibus fugiat aliquid? Unde deserunt omnis repudiandae repellendus ipsam! Non, suscipit veritatis? Eligendi, expedita?
        Maiores accusantium ex quod cupiditate possimus voluptatibus expedita odio unde excepturi voluptatum magnam natus veritatis iure aliquam quaerat ducimus modi repudiandae molestias, commodi nostrum, accusamus nihil quidem porro doloremque! Doloremque!
        Necessitatibus tenetur ab, error dolores quaerat quod fugiat natus beatae rerum vel ipsa, cumque earum corporis adipisci sunt? Nisi, ut enim. Expedita voluptates veritatis reprehenderit commodi corrupti, explicabo esse cupiditate.
        Ipsum dolore tenetur earum maiores error doloremque fugit cum nam quibusdam consequuntur pariatur harum aliquid, culpa, explicabo ea magni natus, reiciendis aliquam nesciunt nobis quisquam magnam eius. Provident, vel! Officiis?
        Recusandae pariatur, porro mollitia laboriosam placeat aperiam. Temporibus, sint voluptatem? Saepe perspiciatis voluptates ea itaque quae reiciendis repellat vitae repellendus laborum earum animi voluptas laudantium, qui sed? Earum, eius eaque.
        Quaerat, nemo. Deserunt, vitae ullam? Totam, assumenda amet beatae eos alias enim laborum atque, rerum quam veniam consectetur tenetur. Dolores tenetur alias quidem dolore voluptates aspernatur earum at qui sapiente?
        Qui ullam aperiam velit laudantium officiis beatae sequi quas repellendus provident expedita facere, accusamus optio mollitia temporibus, eligendi vel, maxime illo exercitationem architecto sint laborum voluptates. Officiis similique sed quibusdam.
        Dolores magni assumenda neque debitis, minus repudiandae ex unde perferendis. Laborum, facere perspiciatis labore deleniti soluta dolorum fuga ipsum assumenda similique inventore cum hic unde minus, aperiam sequi error quia.
        Assumenda eos amet ab, recusandae cumque possimus atque temporibus quis nostrum architecto molestiae, itaque numquam? Ut optio delectus nostrum iste, aspernatur provident neque quod, sed laudantium molestiae accusamus harum rerum.
        Dicta maiores, eveniet eius quas nulla, aliquid similique fugit nobis unde inventore ipsum laboriosam molestiae vel totam culpa, non recusandae explicabo voluptas voluptatum. Possimus natus soluta alias, quasi et quia!
        Aspernatur, saepe. Nam beatae asperiores alias porro dicta itaque in unde esse optio numquam iste nesciunt officia voluptate, minima maxime nulla at explicabo magni quo, aliquam, impedit illo enim sapiente.
        Vel at, dignissimos nesciunt doloremque soluta blanditiis illum corrupti molestiae, eveniet error mollitia optio commodi. Maxime ipsam cum, incidunt quos sit repellat sequi consequuntur excepturi, praesentium laborum veniam, ex ea.
        Nulla minus at fuga corporis praesentium quasi, voluptatum ad impedit possimus rem facilis nobis explicabo, est unde optio mollitia vero assumenda inventore veritatis fugiat modi voluptatibus doloremque nemo dolore? Corporis.
        Error pariatur odio assumenda dignissimos quo. Illo consequatur eos vel expedita quae eaque ipsa praesentium unde consequuntur exercitationem nemo iusto quo, distinctio consectetur repudiandae eius accusamus. Nesciunt nemo error ratione.
        Fugiat, optio dignissimos corporis nihil modi eius itaque nostrum eos veniam non doloremque consectetur maxime alias maiores in hic pariatur repellat eum similique enim numquam laudantium, natus voluptatum officiis. In!
        Sit rem perspiciatis sunt nesciunt at, recusandae maxime magni libero, aspernatur quidem similique incidunt fugiat labore impedit dolore nulla atque quod! Dignissimos, iusto distinctio aut iste omnis deleniti in rem.
        Illum eum cum id optio ratione eveniet libero? Pariatur eveniet, temporibus repellendus deserunt incidunt praesentium enim similique neque adipisci consequuntur illum aspernatur blanditiis ducimus, amet commodi nesciunt excepturi fugiat molestias.
        Dolorum quod tempore cumque fuga, sequi ipsa a tenetur ea placeat, ducimus obcaecati nulla deserunt sed dolor, dignissimos neque asperiores ipsum magni! Placeat ducimus earum repellendus sunt cumque consectetur quos.
        Accusamus id laboriosam qui repudiandae repellat eos iure ducimus, illo consequatur ad perferendis fugit quas amet veniam molestiae dolorem facere provident accusantium voluptate aspernatur porro iusto voluptatibus labore? Dolore, temporibus?
        Provident, doloremque veritatis inventore dolores laudantium ipsam harum sequi laborum, esse debitis corporis ea eum quasi perspiciatis iure, aliquid earum doloribus porro neque autem commodi enim. Ipsum libero minus voluptates!
        Ipsa, voluptate. Illum quas beatae commodi vitae deleniti at eum, minus eos, debitis deserunt quia necessitatibus impedit voluptatum alias ea voluptatem odio mollitia quos, dicta reprehenderit veritatis animi iusto doloribus!
        Suscipit sint explicabo consequuntur eveniet! Voluptatibus, velit placeat! Sed laudantium voluptate sapiente nihil delectus culpa totam quibusdam atque tenetur labore eveniet odit ut mollitia cumque, quos hic. Error, porro corrupti.
        Totam suscipit nihil blanditiis, vero dolore odit ad officiis, architecto sapiente cum non doloremque, fugit cupiditate at? Aliquam accusamus, saepe earum iusto, possimus nisi, quisquam nam amet tempora laudantium illum?
        Sed, quis tempore. Adipisci vitae numquam eveniet expedita reiciendis unde officia neque fugiat nulla tenetur, harum dicta velit fugit recusandae mollitia facilis. Expedita numquam sapiente velit, odit voluptas quam quisquam.
        Omnis ipsum ullam culpa modi officia? Iste, totam eum? Officia, neque ea quasi dolore consequatur facilis deserunt! Veniam accusantium sapiente veritatis suscipit pariatur. In eveniet neque, aspernatur molestias architecto vero!
        Vitae quae molestiae corporis, repellat cum, voluptatum soluta perferendis, magni facere nihil animi veniam. At incidunt recusandae, maxime facilis id cum odit eligendi, molestiae iste voluptatibus, illum iusto doloribus ipsam.
        At, distinctio magni beatae libero provident, magnam ab, minima explicabo id expedita illum eius amet pariatur consectetur labore veniam accusantium dolorum esse ipsa ex possimus vitae reiciendis! Asperiores, ab in!
        Omnis fugiat, asperiores officia numquam libero similique reprehenderit aspernatur possimus vitae vel consectetur amet? Recusandae veritatis eum neque ratione animi sint non quas, voluptatibus harum, molestias delectus aliquam voluptate laudantium!
        Ipsa illum rem esse ab ea suscipit aliquid quos quod, quibusdam, porro corrupti tenetur culpa perspiciatis ducimus fugiat amet cum blanditiis ad voluptates ex laborum fugit deleniti. Maiores, laboriosam animi.
        Assumenda harum eius sapiente quis necessitatibus veniam sit. Iusto itaque nobis, fuga facere, sunt fugiat quia maiores, aliquam corrupti accusantium quo saepe quae perferendis magni quam modi labore animi nam.
        Deserunt expedita amet facere qui temporibus, ab odit vel voluptate eveniet soluta nemo itaque doloribus fugiat perspiciatis rerum et saepe velit quia incidunt tempore maxime nihil. Similique distinctio voluptas facilis!
        Ea sequi rerum dolores expedita ad culpa, blanditiis architecto? Libero illum sed provident, laborum ipsam velit quo assumenda pariatur officia ipsum beatae? Praesentium ratione necessitatibus commodi voluptatibus est corrupti labore.
        Quia culpa quis labore unde pariatur id possimus doloribus explicabo sapiente beatae, perferendis quo cupiditate vitae maxime accusantium soluta tenetur omnis minima consequatur fugiat quam consequuntur laboriosam corrupti quas? Quisquam.
        Error explicabo, non adipisci tempore vel vero nobis eius, quas sunt quos fugiat, vitae neque accusantium veniam quisquam sit dolores. Consequatur a, magnam praesentium harum totam distinctio optio quas libero?
        Rerum quasi commodi magnam! Mollitia minus quam repellendus accusantium eum iste alias. Excepturi voluptates enim recusandae suscipit inventore reiciendis nihil officia? Sed cupiditate ipsum nesciunt eveniet, maiores consectetur nam ipsa.
        Totam officia quas soluta animi tempore, quos voluptas deleniti numquam cum molestias corrupti incidunt sunt voluptate in sit, eligendi aliquid tempora autem aliquam dicta. Autem tempore dolorum ducimus dicta dolores.
        Et quae quas possimus voluptatibus provident facere, explicabo architecto dicta quasi, ducimus quis enim impedit harum! Nulla pariatur tempora quos dolores iusto ullam ipsum ea magnam quisquam velit, veritatis magni.
        Reprehenderit quos dolorum tempore? Fuga sed quibusdam quisquam qui distinctio, corporis reiciendis ipsam velit rem temporibus eos suscipit vel adipisci tenetur enim cupiditate amet laudantium excepturi placeat molestias quas. Soluta.
        Animi placeat distinctio id odio illum laudantium numquam qui corrupti inventore, voluptatibus nostrum provident facilis in recusandae asperiores neque ipsam quo ducimus fuga dolorem officia mollitia eaque. Magnam, suscipit tempore.
        Incidunt ut quis non beatae debitis, id quam sunt maiores. Fuga, exercitationem neque inventore aut eos enim aliquid aliquam laboriosam consequuntur sapiente itaque nisi nulla molestiae velit reprehenderit temporibus architecto.
        Fugit dolores minus sed vero quibusdam! Commodi vitae, ullam eaque quas optio officia sint voluptates ratione facilis eum ad accusantium! Asperiores aliquid maiores esse ex ullam iure et cum est?
        Earum veritatis corporis quo sequi tenetur velit fugit accusamus, sapiente repellendus ducimus optio blanditiis eum placeat soluta nihil reiciendis sint? Consequuntur porro, sit non sequi neque laboriosam! Cupiditate, quibusdam veritatis!
        Ratione temporibus tempore architecto impedit culpa amet ullam aliquid at, voluptatem laborum fugit numquam. Vero culpa, saepe eligendi sunt deserunt debitis asperiores, ad placeat vel, itaque harum eum ducimus obcaecati.
      </p>
    </div>
  </div>
</template>

<style scoped>
.container-home {
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.swiper-container {
    width: 100%;
    height: 100%; 
}

.slider-image {
    width: 100%;
    height: 100%; 
    object-fit: cover; 
}

.flipbox-contain {
  z-index: 1;
}

</style>
