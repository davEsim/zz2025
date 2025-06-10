<?
//$galleries = new xGalleries($db, "xGalleries");
$lang = $_ENV["lang"];
?>

<style>
    @font-face {
            font-family: "saans_jsheavy";
            src: url("<?=$_ENV["relPath"]?>assets/font/saansjs-heavy-webfont.woff2?v=4") format("woff2"),
                url("<?=$_ENV["relPath"]?>assets/font/saansjs-heavy-webfont.woff?v=4") format("woff");
            font-weight: normal;
            font-style: normal;
            font-display: block;
            ascent-override: 95%;
        }
    


    .nav--main ul{
            margin-left: 0;
            margin-bottom: 0;
        }
        .nav--main ul li{
            display: inline-block;
            margin-right: 2rem;
        }

    section{
        margin-block: 2rem;
        padding-block: 1rem;
    }

        section h2{
            text-align: center;
        }

    .section--edition{
        background-color: #df323c;
        color: white;
        
    }
    .section--extra{
        background-color: #df323c;
        color: white;
        padding-block: 5rem;
        margin-block: 0;
    }

        .section--extra .stat, .section--extra .credits{
            color: #212121;
        }

    .section--black{
        background-color: black;
        color: white;
    }

    .clipImg{
        clip-path: circle(45.0% at 53% 42%);
    }
    .stat{
        font-family: "saans_jsheavy";
        font-size: 3.5rem;
        color: #df323c;
        margin-bottom: .3rem;
    }

    .article--imgH300 img{
        height: 300px;
    }

    section .img--main {
        height: 400px;
        width: 100%;
        object-fit: cover;
    }

    .hero__img{
        clip-path: circle(500px at center 250px);
        max-height: 300px;
    }

    .section--main{
        height: calc(100vh - 87px); 
        background-image: url("imgs/hero.jpg");
        background-size: cover;
        background-position: center;
    }

    .section--main .row{
     height: 100%;
    }

    .section--main .columns{
        display: flex;
        align-items: center;
    }

    .section--blockPadding3{
        padding-block: 3rem;
    }

    .p--main{
        font-family: "saans_jsheavy";
        font-size: 2rem;
        color: white;
        
    }
        .p--main .stat{
            font-size: 5rem;
        }
    figure{
        position: relative;
    }
        figcaption{
            position: absolute;
            bottom: 1rem;
            right: 0;
            text-align: right;
            opacity: .8;
            background-color: #212121;
            color: white;
            font-size: .8rem;
            padding: .5rem;
            padding-left: .8rem;
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
        }

    article{
        margin-bottom: 3rem;
    }
</style>
<section class="section--main section--noMargin">
    <div class="row">
        <div class="medium-12 columns">
            <p class="p--main"><span class="stat">122 590</span><br>návštěvnic a návštěvníků</p>
        </div>
    </div>
</section>
<section class="section--black section--noMargin section--blockPadding3">
<div class="row">
        <div class="medium-12 columns text-center">
            <h2>Jeden svět v číslech</h2>
        </div>
    </div>
    <div class="row align-center marginTop marginBottom">
        <div class="large-3 medium-6 small-12 columns text-center marginBottom2"><div class="stat">39 436</div> <strong>Praha</strong></div>
        <div class="large-3 medium-6 small-12 columns text-center marginBottom2"><div class="stat">1948</div> <strong>Pražské ozvěny</strong></div>
        <div class="large-3 medium-6 small-12 columns text-center marginBottom2"><div class="stat">77 032</div> <strong>Regiony</strong></div>
    </div>
    <div class="row align-center marginTop marginBottom">
        <div class="large-3 medium-6 small-12 columns text-center marginBottom2"><div class="stat">78 365</div> <strong>Školní projekce </strong></div>
        <div class="large-3 medium-6 small-12 columns text-center marginBottom2"><div class="stat">7</div> <strong>Brusel - počet promítacích míst</strong></div>
        <div class="large-3 medium-6 small-12 columns text-center marginBottom2"><div class="stat">1321</div> <strong>Brusel - návštěvnost</strong></div>
    </div>
    
</section>
<div class="row row--first">
    <div class="small-12 columns text-center">
        <h1>Závěrečná zpráva 2025</h1>
        <div class="lead"><?=$rActivePage["perex$lang"]?></div>
    </div>
</div>

<section id="mise">
    <div class="row marginBottom">
        <div class="medium-12 columns">
            <h2>Mise a rozměr festivalu</h2>
        </div>
    </div>
    <div class="row align-justify">
        <div class="xlarge-6 medium-8 small-12 columns">
            <h3>Úvodní slovo ředitele</h3><br>
            <p>
            Dvacátý sedmý ročník Mezinárodního filmového festivalu o lidských právech Jeden svět přišel v čase, kdy jsou ochrana lidských práv a globální spravedlnost ohroženy změnami stávajícího geopolitického řádu. </p>
            <p>
            Klíčovou roli v monitorování a obraně lidských práv hrají mezinárodní organizace a instituce podporované světovým společenstvím jako Organizace spojených národů nebo Mezinárodní trestní soud. Stále častěji jsme však svědky podrývání jejich autority a tím i zlehčování utrpení lidí v oblastech současných konfliktů, kde jsou ztráty zejména civilního obyvatelstva nezpochybnitelné. Jedním z cílů Jednoho světa vždy bylo a bude přinášet přímá svědectví, která umožňují vytvářet si vlastní názor a nezřídka vyvracet množící se dezinformace a politicky motivované lži. Věříme, že na této cestě mají své místo také příběhy naděje, vzepření se nespravedlnosti a boj kolektivů či jednotlivců za lepší budoucnost. </p>
            <p>
            Ve světě, kde jsou na denním pořádku konflikty a války v různých podobách, včetně těch kulturních, cítíme, že je naší povinností pracovat na festivalu přístupném a otevřeném lidem bez rozdílu jejich původu, vzdělání či jiných privilegií. Věříme, že Jeden svět za dobu své existence prokázal, že velkou filmovou akci není nutno rámovat červenými koberci či exkluzivním uváděním filmů pro vyvolené, ale že ji lze chápat jako obrovské veřejné fórum, kde jsou si v přístupu k informacím všichni rovni a kde má každý hlas i názor svou jedinečnou hodnotu bez ohledu na to, z jakého regionu zaznívá. </p>
            <p>
            Proto nás moc těší, že festival letos zavítal do rekordních 57 měst po celé České republice, a to v termínu od 12. března do 27. dubna. Věříme, že se filmy Jednoho světa a horké debaty po nich dostaly k zatím nejširší veřejnosti. Společná setkání i sdílení silných zážitků, znepokojení, překvapení, inspirace a radosti nám udělaly velkou radost. </p>
            
            <p>Za tým Jednoho světa </p>
            <p><strong>Ondřej Kamenický</strong> <br>
            Ředitel festivalu Jeden svět </p>
        </div>
        <div class="xlarge-5 medium-8 small-12 columns">
            <figure>
                <img class="clipImg" src="https://www.jedensvet.cz/download/imgs/9219_.jpg">
                <figcaption>Foto: Člověk v tísni</figcaption>
            </figure>    
        </div>

    </div>

    <div class="row align-center marginTop marginBottom">
        <div class="xlarge-8 medium-8 small-12 columns">
            <div class="responsive-embed widescreen" style="margin-bottom:0">
                <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/eMVpdf1yQM0?si=VrsUCVf5gWIUkMcI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div class="row align-justify align-middle">
        <div class="xlarge-5 medium-8 small-12 columns">
            <h3>Mise Jednoho světa</h3>
            <p>
            Jeden svět se za 27 let své existence stal největším filmovým festivalem s tematikou lidských práv na světě. Do desítek měst po celé České republice každoročně přináší příběhy bezpráví a boje za svobodu. Slouží jako platforma, jež propojuje tvůrce*kyně ze všech koutů planety a vzdělává o současném dění. </p>
            <p>Jedním ze základních pilířů festivalu je přístupnost pro všechny diváky*čky, a to bez ohledu na fyzické, mentální či smyslové postižení. Jeden svět se rovněž soustavně snaží utvářet bezpečný prostor pro diskuzi, v rámci které má každý názor stejnou hodnotu. </p>
            <p>Festival Jeden svět je držitelem čestného uznání organizace UNESCO za výchovu k lidským právům. Organizátorem akce je <a title="Člověk v tísni" href="https://www.clovekvtisni.cz/" target="_blank">Člověk v tísni</a>. </p>
        </div>
        <div class="xlarge-6 medium-8 small-12 columns">
            <figure>        
                <img src="imgs/Foto_1.jpg" alt="Lucerna, plný kinosál." title="Jeden svět, kino Lucerna" class="hero__img" loading="lazy">
                <figcaption>Foto: Karolína Fialová</figcaption>
            </figure> 
        </div>
    </div>

    <div class="row align-center marginTop ">
        <div class="xlarge-5 medium-8 small-12 columns marginTop text-center">
            <h3>Jeden svět v regionech</h3>
        </div>
    </div>
    <div class="row align-center marginTop1 marginBottom">
        <div class="medium-3 columns text-center">
            <div class="stat">57</div> <strong>měst po celé České republice</strong>
        </div>
        
    </div>
    <div class="row align-center align-middle">
        <div class="xlarge-5 medium-8 small-12 columns marginBottom">
            <figure>
                <img src="imgs/Foto_regiony.jpg" alt="Zahájení v Ostravě">
                <figcaption>Foto: tým JS Ostrava</figcaption>
            </figure> 
        </div>
        <div class="xlarge-5 medium-8 small-12 columns marginBottom">
            <p>
            Za 27 let své existence Jeden svět vybudoval unikátní síť festivalových měst, díky které filmy s lidskoprávní tematikou nepřináší pouze pražskému publiku, ale uvádí je v kinech po celé České republice. </p>
            <p>
            Letošní ročník se vedle Prahy uskutečnil v rekordních 56 českých městech. Vůbec poprvé festival zavítal do Černošic či Humpolce. Každé město má svůj autonomní organizační tým, což dodává Jednomu světu na pestrosti. Lokální publika se kromě samotných projekcí mohou těšit také na debaty s tvůrci*kyněmi či koncerty. </p>
        </div>
    </div>

    <div class="row align-center">
        <div class="xlarge-8 medium-8 small-12 columns text-center marginBottom2">
            <h3>Pražské ozvěny</h3>
        </div>
    </div>
    <div class="row align-center marginBottom2">
        <div class="medium-3 columns text-center">
            <div class="stat">5</div> <strong>promítacích míst mimo pražské centrum </strong>
        </div>
        <div class="medium-3 columns text-center">
            <div class="stat">615</div> <strong>diváků*aček</strong>
        </div>
    </div>
    <div class="row align-center">
        <div class="xlarge-10 medium-8 small-12 columns text-center">
            <img src="imgs/mlyn.jpg" alt="" title="Pražské ozvěny Jednoho světa pronikají z městského centra na okraj" class="hero__img" loading="lazy">
        </div>    
    </div>
    
    <div class="row align-center marginTop">
        <div class="xlarge-6 medium-8 small-12 columns">
            <p>
            Na hlavní část festivalu po jejím skončení navázaly Pražské ozvěny. Místní publikum letos mělo možnost zhlédnout vybrané lidskoprávní filmy v rekordních 5 kinech mimo pražské centrum, mimo jiné v Kině Kavalírka či Modřanském Biografu. Organizátoři*rky z jednotlivých promítacích míst si filmový program sestavili sami a k vidění byla citlivá sociální dramata i sondy do konfliktních oblastí. </p>
            
        </div>
    </div>
    <?
    $rs = $db->queryAll("   SELECT mt.sequence, m.media, m.seo, m.id, mt.id_media FROM mediaTables AS mt 
                            INNER JOIN media AS m 
                            ON mt.id_media = m.id 
                            WHERE mt.id_flagsTables = 63 AND mt.idInTable = 43
                            ORDER BY mt.sequence DESC");
    ?>
    <div class="row align-center marginTop">
        <div class="medium-8 columns">
            <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
                <div class="orbit-wrapper">
                    <div class="orbit-controls">
                        <button class="orbit-previous"><span class="show-for-sr">Předchozí</span>&#9664;&#xFE0E;</button>
                        <button class="orbit-next"><span class="show-for-sr">Další</span>&#9654;&#xFE0E;</button>
                    </div>
                    <ul class="orbit-container">
                        <?
                        foreach($rs AS $r){
                        ?>
                            <li class="is-active orbit-slide">
                                <figure class="orbit-figure">
                                <img class="orbit-image" src="/download/imgs/<?=$r["seo"]?>" alt="Space">
                                <figcaption class="orbit-caption"><?=$r["media"]?></figcaption>
                                </figure>
                            </li>
                        <?
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row align-center marginTop">
        <div class="xlarge-6 medium-8 small-12 columns text-center">
            <h3>Jeden svět na školách</h3>
        </div>
    </div>
    <div class="row align-center marginTop">
        <div class="medium-3 columns text-center">
            <div class="stat">17 009</div> <strong>žáků*aček, studentů*ek a učitelů*ek v Praze </strong>
        </div>
        <div class="medium-3 columns text-center">
        <div class="stat">xx xxx</div> <strong>žáků*aček, studentů*ek a učitelů*ek v regionech</strong>
        </div>
    </div>
    <div class="row align-center align-middle marginTop">
        <div class="xlarge-5 medium-8 small-12 columns">
            <p>Příběhy o boji za svobodu či mezilidských vztazích by neměly být určené pouze dospělým. Vedle tradičních promítání proto 27. Jeden svět nabídnul také pestrý výběr školních projekcí zaštítěných iniciativou Jeden svět na školách.</p> 
            <p>
            Obsah školních projekcí je pečlivě uzpůsoben věku publika. Ať už se jedná o diváky*ačky ze základních či středních škol, prioritou je především zasazení témat do širšího kontextu. Po každé školní projekci tak následuje debata, jež mladým divákům*ačkám rozšiřuje obzory a učí je vyjádřit vlastní názor. </p>
            <p>
            Vůbec poprvé na projekce letos zavítaly také 1. a 2. třídy základních škol. Vzdělávací projekce proběhly ve všech 57 městech po celé České republice. </p>
            <p>
            Jeden svět na školách o lidských právech soustavně vzdělává už xy let. Vedle školních projekcí nabízí platforma i celoroční vzdělávací projekty, do nichž se můžou zapojit studující z celého Česka. </p>
        </div>
        <div class="xlarge-5 medium-8 small-12 columns">
            <figure>
                <img src="imgs/Foto_jsns.jpg" alt="Jeden svět na školách">
                <figcaption>Foto: Karolína Malá</figcaption>
            </figure> 
        </div>    
    </div>

    <div class="row align-center marginTop">
        <div class="xlarge-8 medium-8 small-12 columns text-center  marginBottom2">
            <h3>Přístupnost</h3>
        </div>
    </div>
    <div class="row align-center align-middle marginBottom ">
        <div class="xlarge-5 medium-8 small-12 columns">
        <figure>
            <img src="imgs/Foto_Pristupnost.jpg" alt="" title="" class="hero__img" loading="lazy">
            <figcaption>Foto: Lukáš Bíba</figcaption>
        </figure> 
        </div>
        <div class="medium-2 columns text-center">
            <div class="stat">4</div> <strong>filmy s audiopopisem</strong><br><br>
            <div class="stat">3</div> <strong>relaxované projekce</strong><br><br>
            <div class="stat">18</div> <strong>filmů s SDH titulky</strong><br><br>
            <div class="stat">7</div> <strong>debat tlumočených do znakového jazyka </strong><br><br>
            <div class="stat">7</div> <strong>debat se simultáním přepisem do českého jazyka </strong>
        </div>
    
        <div class="xlarge-5 medium-8 small-12 columns">
            <p>
            Jeden svět se řadí mezi nejpřístupnější filmové festivaly na světě. Řídí se mottem “Film pro všechny” a v rámci mezinárodní sítě Human Rights Film Network patří v oblasti přístupnosti mezi lídry.  
            </p>
            <p>
            27. Jeden svět s filmy pokusil zpřístupnit osobám s fyzickým, smyslovým i mentálním postižením. Nabídnul filmy doplněné audiopopisem a pečlivě zmapoval přístupnost jednotlivých promítacích míst. Organizační tým nezapomněl ani na rodiče s dětmi a přinesl i několik projekcí pro rodiny.   
            </p>
        </div>
    </div>
</section>


<section id="ceny" class="section--extra">
    <div class="row">
        <div class="medium-12 columns">
            <h2>Ceny a program</h2>
        </div>
    </div>
    <div class="row align-center marginTop marginBottom">
        <div class="xlarge-10 medium-10 small-12 columns text-center">
        <figure>  
                    <img src="imgs/Foto_ceny.jpg" alt="" title="porota ceske souteze" loading="lazy" class="hero__img">
                    <figcaption>Foto: Lukáš Bíba</figcaption>
                </figure>
        </div>
    </div>
    <div class="row align-center marginBottom">
        <div class="xlarge-6 medium-8 small-12 columns">
            <h3>Oceněné filmy</h3>
            <p>
            Na Jednom světě nejsou filmy oceňovány pouze na základě uměleckých kvalit, ale také s ohledem na problematiku, jíž se věnují. O vítězných projektech rozhodly poroty složené z filmových expertů*ek, lidskoprávních osobností či studentstva. 
            </p>
        </div>
    </div>
    <div class="row">
        <div class="large-4 medium-6 small-12 columns">
            <article>
                <figure>
                    <img alt="Písně o zemi v plamenech" src="https://muj.jedensvet.cz/filmimages/image.ashx?I=2&amp;W=437&amp;H=243&amp;ID=0&amp;IMGID=19739" loading="lazy" class="lazyload">
                    <figcaption>Foto: Moon Man</figcaption>
                </figure>
                <p class="credits">Cena poroty Mezinárodní soutěže za nejlepší film</p>
                <h3>Písně o zemi v plamenech</h3>
                <p>režie: Olha Zhurba</p>
                <p>Audiovizuální mozaika zachycuje proměnu Ukrajiny během války, která se pro její obyvatelstvo stala každodenní realitou.</p>
            </article>
        </div>
        <div class="large-4 medium-6 small-12  columns">
            <article>  
                <figure>
                    <img alt="Krotitelka milenek" src="https://muj.jedensvet.cz/filmimages/image.ashx?I=2&amp;W=437&amp;H=243&amp;ID=0&amp;IMGID=19759" loading="lazy" class="lazyload">
                    <figcaption>Foto: After Argos Films, Anonymous Content, Impact Partners</figcaption>
                </figure>
                <p class="credits">Cena poroty Mezinárodní soutěže za režii</p>
                <h3>Krotitelka milenek</h3>
                <p>režie: Elizabeth Lo</p>
                <p>O mimomanželské aféře a následné intervenci krotitelky milenek zkoumá lásku, věrnost a zásahy do soukromí v kontextu moderní Číny.  </p>
            </article>
        </div>
        <div class="large-4 medium-6 small-12  columns">
            <article>
                <figure>  
                    <img alt="Hrany snů" src="https://muj.jedensvet.cz/filmimages/image.ashx?I=2&amp;W=437&amp;H=243&amp;ID=0&amp;IMGID=19766" loading="lazy" class="lazyload">
                    <figcaption>Foto: Dolce Vita Films, Felucca Films</figcaption>
                </figure>
                <p class="credits">Cena poroty Václava Havla za nejlepší film v kategorii Máte právo vědět</p>
                <h3>Hrany snů</h3>
                <p>režie: Nada Riyadh a Ayman El Amir</p>
                <p>Snímek vypráví o komunitě egyptských dívek, které se proti společenským stereotypům vymezují prostřednictvím divadla. </p>
            </article>  
        </div>

        <div class="large-4 medium-6 small-12  columns">
            <article>
                <figure>  
                    <img alt="Ta druhá" src="https://muj.jedensvet.cz/filmimages/image.ashx?I=2&amp;W=437&amp;H=243&amp;ID=0&amp;IMGID=19838" loading="lazy" class="lazyload">
                    <figcaption>Foto: m3 films s.r.o., guča films, Česká televize, FAMU</figcaption>
                </figure>
                <p class="credits">Cena poroty České soutěže za nejlepší film</p>
                <h3>Ta druhá</h3>
                <p>režie: Marie-Magdalena Kochová</p>
                <p>Dokument skrze příběh osmnáctileté Johany citlivě nahlíží do života skleněných dětí – sourozenců dětí s postižením, jejichž potřeby mohou být v rámci rodinných okolností nezáměrně přehlížen. </p>
            </article>  
        </div>
        <div class="large-4 medium-6 small-12  columns">
            <article>
                <figure>
                    <img alt="Vytržení II - Portál" src="https://muj.jedensvet.cz/filmimages/image.ashx?I=2&amp;W=437&amp;H=243&amp;ID=0&amp;IMGID=19796" loading="lazy" class="lazyload">
                    <figcaption>Foto: Le Fresnoy</figcaption>
                </figure>
                <p class="credits">Cena poroty soutěže imerzních filmů</p>
                <h3>Vytržení II – Portál</h3>
                <p>režie: Alisy Berger</p>
                <p>Kruté svědectví o ruské okupaci Ukrajiny zprostředkovávající zármutek pramenící ze ztráty domova.</p>
            </article>  
        </div>
        <div class="large-4 medium-6 small-12  columns">
            <article>
                <figure>
                    <img alt="Demokracie noir" src="https://muj.jedensvet.cz/filmimages/image.ashx?I=2&amp;W=437&amp;H=243&amp;ID=0&amp;IMGID=19732" loading="lazy" class="lazyload">
                    <figcaption>Foto: Clarity Films, Real Lava</figcaption>
                </figure>  
                <p class="credits">Cena regionální poroty</p>
                <h3> Demokracie noir  </h3>
                <p>režie: Connie Field</p>
                <p>Snímek mapuje příběhy tří žen, které se různými způsoby vymezují proti korupci vlády Viktora Orbána, jeho devastaci přírody i škrtům v oblastech zdravotnictví nebo školství. </p>
            </article>  
        </div>
        <div class="large-4 medium-6 small-12  columns">
            <article> 
                <figure> 
                    <img alt="Pan Nikdo proti Putinovi" src="https://muj.jedensvet.cz/filmimages/image.ashx?I=2&amp;W=437&amp;H=243&amp;ID=0&amp;IMGID=19835" loading="lazy" class="lazyload">
                    <figcaption>Foto: Made in Copenhagen, Pink Poductions</figcaption>
                </figure>
                <p class="credits">Cena studentské poroty</p>
                <h3>Pan Nikdo proti Putinovi</h3>
                <p>režie: David Borenstein a Pavel Talankin</p>
                <p>Příběh bývalého ruského učitele Pavla Talankina přináší svědectví o každodenním životě během války a odhaluje mechanismy ruské propagandy na školách v době tzv. speciální vojenské operace. </p>
            </article>  
        </div>
        <div class="large-4 medium-6 small-12  columns">
            <article>
                <figure>  
                    <img alt="Grace" src="https://muj.jedensvet.cz/filmimages/image.ashx?I=2&amp;W=437&amp;H=243&amp;ID=0&amp;IMGID=19841" loading="lazy" class="lazyload">
                    <figcaption>Foto: Differ Media, Dhamira Films</figcaption>
                </figure>
                <p class="credits">Cena dětské poroty</p>
                <h3>Grace </h3>
                <p>režie: Julia Dahr a Dina Mwende</p>
                <p>Krátkometrážní film vypráví o keňské rodině z farmářské vesnice, na níž 		dopadají projevy změny klimatu s čím dál větší intenzitou. </p>
            </article>  
        </div>
        <div class="large-4 medium-6 small-12  columns">
            <article>
                <figure>  
                    <img alt="Hawa píše" src="https://muj.jedensvet.cz/filmimages/image.ashx?I=2&amp;W=437&amp;H=243&amp;ID=0&amp;IMGID=19794" loading="lazy" class="lazyload">
                    <figcaption>Foto: Tag Film, Een vad de jongens, EOdocs</figcaption>
                </figure>
                <p class="credits">Divácká cena</p>
                <h3>Hawa píše</h3>
                <p>režie: Najiba Noori</p>
                <p>Intimní portrét milované matky a příběh o ženské emancipace v rodném Afghánistánu. </p>
            </article>  
        </div>
    </div>
    <div class="row align-center marginBottom1">
        <div class="small-12 columns marginTop">
            <h3>Poroty</h3>
            
        </div>
    </div>
    <div class="row">
        <div class="medium-6 small-12 columns">
            <article class="article--imgH300">
                <figure>    
                    <img src="https://www.jedensvet.cz/download/imgs/12436_mezinarodni-soutez.jpg" alt="Porota Mezinárodní soutěže" title="Porota Mezinárodní soutěže" loading="lazy">
                    <figcaption>Foto: Lukáš Bíba</figcaption>
                </figure>    
                <h4>Porota Mezinárodní soutěže</h4>       
                <p>V porotě Mezinárodní soutěže zasedají významní*é filmoví*é experti*ky ze zahraničí i Česka. Letos o vítězných filmech rozhodovala filmová dramaturgyně a fotografka Lyse Ishimwe Nsengiyumva, filmař a umělec z Gazy Mohamed Jabaly, režisér, producent a pedagog Peter Kerekes.</p>
            </article>
        </div>
        <div class="medium-6 small-12 columns">
            <article class="article--imgH300">
                <figure>  
                    <img src="https://www.jedensvet.cz/download/imgs/12437_porota-vaclava-havla.jpg" alt="Porota Václava Havla" title="Porota Václava Havla" loading="lazy">
                    <figcaption>Foto: Lukáš Bíba</figcaption>
                </figure>   
                <h4>Porota Václava Havla</h4>         
                <p>Porotu Václava Havla vždy tvoří tři významné osobnosti na poli lidských práv.  Vítězný snímek v kategorii Máte právo vědět tentokrát vybral artivista Lester Álvarez, šéfredaktor a předseda Investigativního centra Jana Kuciaka Lukáš Diko, egyptská obhájkyně lidských práv Samar Elhussieny. </p>
            </article>
        </div>
        <div class="medium-6 small-12 columns">
            <article class="article--imgH300">
                <figure>  
                    <img src="https://www.jedensvet.cz/download/imgs/12438_porota-ceske-souteze.jpg" alt="" title="porota ceske souteze" loading="lazy">
                    <figcaption>Foto: Lukáš Bíba</figcaption>
                </figure>   
                <h4>Porota České soutěže</h4>         
                <p>Porota České soutěže se skládá ze tří zástupců*kyň mezinárodních filmových festivalů. Letos o vítězném českém filmu rozhodl dramaturg dokumentárních filmů Mezinárodního filmového festivalu Bergen Håkon Tveit, ředitelka industry programu na festivalu Millennium Docs Against Gravity Anna Szczypińska, vedoucí programového oddělení Mezinárodního festivalu dokumentárních filmů v Amsterdamu Joost Daamen.  </p>
            </article>
        </div>
        <div class="medium-6 small-12 columns">
            <article class="article--imgH300">
                <figure>  
                    <img src="https://www.jedensvet.cz/download/imgs/12439_porota-imerzni-souteze.jpg" alt="Porota Soutěže imerzních filmů" title="Porota Soutěže imerzních filmů" loading="lazy">
                    <figcaption>Foto: Lukáš Bíba</figcaption>
                </figure>   
                <h4>Porota soutěže imerzních filmů</h4>         
                <p>Porota soutěže imerzních filmů je tvořená umělci*kyněmi, teoretiky*čkami, novináři*kami i experty*expertkami v oblasti imerzního či herního umění a virtuální reality. Letos v porotě zasedl vedoucí Katedry herního designu FAMU Andrej Sýkora, umělkyně Ester Geislerová a kurátorka a kulturní manažerka Anna Szylar. </p>
            </article>
        </div>
        <div class="medium-6 small-12 columns">
            <article class="article--imgH300">
                <figure>  
                    <img src="https://www.jedensvet.cz/download/imgs/12440_regionalni-porota.jpg" alt="Regionální porota" title="Regionální porota" loading="lazy">
                    <figcaption>Foto: Lukáš Bíba</figcaption>
                </figure>   
                <h4>Regionální porota</h4>         
                <p>Regionální porota sestává ze dvou zástupců*kyň, které nominovali regionální partneři Jednoho světa. Nominovanými mohou být příznivci*kyně a podporovatelé*ky festivalu v daném městě. Porota je poté doplněna o držitele*ku titulu Zlatý promítač*ka, který je udělován v rámci platformy Promítej i ty!. Letošní regionální porotu utvořil Jan Hajžman z Plzně, Adéla Kamenská z Českého Krumlova, Zlatá promítačka Iveta Dočkalová za Železný brod. </p>
            </article>
        </div>
        <div class="medium-6 small-12 columns">
            <article class="article--imgH300">
                <figure>  
                    <img src="https://www.jedensvet.cz/download/imgs/12441_studentska-porota.jpg" alt="Studentská porota" title="Studentská porota" loading="lazy">
                    <figcaption>Foto: Jakub Hlaváč</figcaption>
                </figure>   
                <h4>Studentská porota</h4>         
                <p>Studentskou porotu každý rok tvoří tři aktivní středoškoláci*ačky, jež se zapojili do projektu Jeden svět na školách - letos Anna Baláčková, Julia Heczková, Petr Suchánek. </p>
            </article>
        </div>
        <div class="medium-6 small-12 columns">
            <article class="article--imgH300">
                <figure>  
                    <img src="https://www.jedensvet.cz/download/imgs/12442_detska-porota.jpg" alt="Dětská porota" title="Dětská porota" loading="lazy">
                    <figcaption>Foto: Jakub Hlaváč</figcaption>
                </figure>   
                <h4>Dětská porota</h4>         
                <p>V dětské porotě zasedá žactvo, jež se účastní celoročních projektů Jednoho světa na školách. V letošním roce vítězný snímek vybírala Eliška Babicová, Viktorie Jirgesová, David Gallovič.</p>
            </article>
        </div>
    </div>

    <div class="row align-center">
        <div class="xlarge-6 medium-8 small-12 columns marginTop">
            <h3>Homo Homini 2025</h3>
            <p>
            U příležitosti festivalu Jeden svět je každoročně udělováno ocenění Homo Homini osobnostem, jež se zásadně zasadily za prosazování lidských práv. Letos Výkonná rada Člověka v tísni vůbec poprvé a mimořádně ocenila 2 osobnosti.  
            </p> 
        </div>
    </div>
    <div class="row align-center">
        <div class="large-3 medium-6 small-12 columns">
            <article class="article--portraitImg">
                <figure>
                    <img src="imgs/Foto_obaji2.jpg" alt="Philip Obaji">
                    <figcaption>Foto: Lukáš Bíba</figcaption>
                </figure>
                <p class="credits">Nigerijský novinář</p>
                <h4>Philip Obaji</h4>      
                <p>Nigerijský novinář Philip Obaji obdržel ocenění Homo Homini za „podrobné zmapování více než stovky případů hrubého porušování lidských práv bezbranných občanů ze strany wagnerovců a dalších ruských paramilitárních skupin“. </p>
            </article>
        </div>
        <div class="large-3 medium-6 small-12 columns">
            <article class="article--portraitImg">
                <figure>    
                    <img src="imgs/Foto_viktorija2.jpg" alt="Viktorja Rosčyna">
                    <figcaption>Foto: Slidstvo.Info</figcaption>
                </figure>
                <p class="credits">Ukrajinská novinářka</p> 
                <h4>Viktorja Rosčyna</h4>      
                <p>Ukrajinská novinářka Viktorja Rosčyna obdržela ocenění Homo Homini za „odvahu vyprávět příběhy Ukrajinců na Ruskem okupovaných územích a za dlouhodobou novinářskou práci věnovanou pokrývání témat ohrožujících demokratické uspořádání Ukrajiny, ze které neslevila ani přes ohrožení osobní bezpečnosti“. Viktorija Roščynová zmizela v srpnu roku 2023 a podle zprávy ruského ministerstva obrany zemřela při převozu z jednoho ruského vězení do druhého.</p>
            </article>
        </div>
    </div>

    <div class="row align-center marginTop">
        <div class="xlarge-6 medium-8 small-12 columns marginTop">
            <h3>Filmové kategorie</h3>
            <p>
            Jeden svět se za 27 let své existence stal největším filmovým festivalem s tematikou lidských práv na světě. Do desítek měst po celé České republice každoročně přináší příběhy bezpráví a boje za svobodu. Slouží jako platforma, jež propojuje tvůrce*kyně ze všech koutů planety a vzdělává o současném dění. </p>
            <p>Jedním ze základních pilířů festivalu je přístupnost pro všechny diváky*čky, a to bez ohledu na fyzické, mentální či smyslové postižení. Jeden svět se rovněž soustavně snaží utvářet bezpečný prostor pro diskuzi, v rámci které má každý názor stejnou hodnotu. </p>
            <p>Festival Jeden svět je držitelem čestného uznání organizace UNESCO za výchovu k lidským právům. Organizátorem akce je <a title="Člověk v tísni" href="https://www.clovekvtisni.cz/" target="_blank">Člověk v tísni</a>. </p>
        </div>
    </div>
    <div class="row align-center marginTop marginBottom">
        <div class="large-2 medium-4 small-12 columns text-center marginBottom2"><div class="stat">12</div> <strong>filmových kategorií</strong></div>
        <div class="large-2 medium-4 small-12 columns text-center marginBottom2"><div class="stat">4</div> <strong>soutěžní sekce</strong></div>
        <div class="large-2 medium-4 small-12 columns text-center marginBottom2"><div class="stat">8</div> <strong>nesoutěžních kategorií</strong></div>
    </div>
    <div class="row align-center marginBottom">
        <div class="large-2 medium-3 small-12 columns text-center marginBottom2"><div class="stat">104</div> <strong>filmů</strong></div>
        <div class="large-2 medium-3 small-12 columns text-center marginBottom2"><div class="stat">84</div> <strong>dokumentů</strong></div>
        <div class="large-2 medium-3 small-12 columns text-center marginBottom2"><div class="stat">11</div> <strong>fikcí</strong></div>
        <div class="large-2 medium-3 small-12 columns text-center marginBottom2"><div class="stat">9</div> <strong>imerzních filmů </strong></div>
    </div>

    <div class="row" data-equalizer data-equalize-on="medium">
        <div class="xlarge-3 large-4 medium-6 small-12 columns">
            <article data-equalizer-watch>
                <img src="https://www.jedensvet.cz/download/imgs/12130_mezinarodni-soutez.jpg" alt="Osoba v šatech a klobouku sedí na písečné pláži a hledí na rozbouřené moře." title="Mezinárodní soutěž" loading="lazy">
                <h4> Mezinárodní soutěž</h4>
                <p> přinesla snímky s výrazným filmovým jazykem, jež referovaly o aktuálním světovém dění a palčivých společenských otázkách.</p> 
            </article>     
        </div>
        <div class="xlarge-3 large-4 medium-6 small-12 columns">
            <article  data-equalizer-watch>
                <img src="https://www.jedensvet.cz/download/imgs/12138_mate-pravo-vedet.jpg" alt="Vedle sebe visící vlajky USA a Kuby." title="Máte právo vědět" loading="lazy">
                <h4>Máte právo vědět</h4>
                <p> dalo prostor příběhům, které by jinak zůstaly neviděné. Zachytilo různé podoby porušování lidských práv i příběhy jednotlivců, jež za lidská práva bojují.  
                </p>  
            </article>
        </div>    
        <div class="xlarge-3 large-4 medium-6 small-12 columns">
            <article  data-equalizer-watch>
                <img src="https://www.jedensvet.cz/download/imgs/12077_ceska-soutez.jpg" alt="Žena kráčí po Václavském náměstí v kostýmu dinosaura." title="Česká soutěž" loading="lazy">   
                <h4>Česká soutěž</h4>
                <p> přinesla pestrý výběr domácích a koprodukčních projektů, které tematicky přesahují hranice České republiky. 
                </p>
            </article>  
        </div>
        <div class="xlarge-3 large-4 medium-6 small-12 columns">
            <article  data-equalizer-watch>
                <img src="https://www.jedensvet.cz/download/imgs/12132_imerzni.jpg" alt="Postava s průsvitným tělem stojí v temném prostředí obklopena zářivými geometrickými světly, která se vznášejí kolem ní." title="Soutěž imerzních filmů" loading="lazy">
                <h4>Soutěž imerzních filmů</h4>
                <p> nabídla projekty ve virtuální realitě, které divácký zážitek obohacují o iluzí přímé zkušenosti a zprostředkovávají jinak nedosažitelné zážitky.
                </p> 
            </article> 
        </div>
        <div class="xlarge-3 large-4 medium-6 small-12 columns">
            <article  data-equalizer-watch>
                <img src="https://www.jedensvet.cz/download/imgs/12135_slovenska-cesta-orez.jpg" alt="Bývalá slovenská prezidentka sedí v kanceláři za svým stolem." title="Slovenská cesta" loading="lazy">
                <h4>Slovenská cesta</h4>
                <p> poukázala na křehkost demokracie, podtrhla důležitost občanské společnosti a nabídla komplexní pohled na situaci v zemi, již se zatajeným dechem sleduje celá Evropa.      
                </p>
            </article>
        </div>  
        <div class="xlarge-3 large-4 medium-6 small-12 columns">
            <article  data-equalizer-watch>
                <img src="https://www.jedensvet.cz/download/imgs/12133_rodinne-site-orez.jpg" alt="Muž se třemi chlapci zapalují venku ve tmě silvestrovskou petardu." title="Rodinné sítě" loading="lazy">
                <h4>Rodinné sítě</h4>
                <p> doložily, že rodina může mít nespočet různých podob. Ať už chrání, či svazují, rodinné vztahy byly ústředním motivem 27. ročníku.     
                </p>
            </article>
        </div>  
        <div class="xlarge-3 large-4 medium-6 small-12 columns">
            <article  data-equalizer-watch>
                <img src="https://www.jedensvet.cz/download/imgs/12082_zensky-pohled-orez.jpg" alt="Detailní záběr na obličej osoby s kulatými brýlemi, která intenzivně sleduje obrazovku." title="Ženský pohled" loading="lazy">
                <h4>Ženský pohled</h4>
                <p> definovala přítomnost silných protagonistek ze všech koutů planety, jež se často nachází ve složitých situacích.     
                </p>
            </article>    
        </div>  
        <div class="xlarge-3 large-4 medium-6 small-12 columns">
            <article  data-equalizer-watch>
                <img src="https://www.jedensvet.cz/download/imgs/12131_muzske-existence.jpg" alt="Muž ve výstražné vestě drží v temné noci zapálenou světlici, která ostře osvětluje jeho tvář a okolí." title="Mužské existence" loading="lazy">
                <h4>Mužské existence</h4>
                <p> patřily zkušenosti mužů, jejich snaze o sebepoznání nebo rozvracení stereotypů.      
                </p>
            </article>    
        </div>
        <div class="xlarge-3 large-4 medium-6 small-12 columns">
            <article  data-equalizer-watch>
                <img src="https://www.jedensvet.cz/download/imgs/12134_ekosystemy.jpg" alt="Dva muži stojí v krajině. Mladší muž v popředí drží v ruce ptačí pero, které si oba prohlíží." title="Ekosystémy" loading="lazy">
                <h4>Ekosystémy</h4>
                <p> prostupovalo téma vztahu mezi člověkem a přírodou. 
                </p>
            </article>    
        </div>
        <div class="xlarge-3 large-4 medium-6 small-12 columns">
            <article  data-equalizer-watch>
                <img src="https://www.jedensvet.cz/download/imgs/12128_hranice-komunit.jpg" alt="Osoba s vážným a odhodlaným výrazem ve tváři kráčí krajinou při soumraku." title="Hranice komunit" loading="lazy">
                <h4>Hranice komunit</h4>
                <p> zachytily lidská společenství z celého světa v krajních situacích. 
                </p>
            </article>  
        </div>
        <div class="xlarge-3 large-4 medium-6 small-12 columns">
            <article  data-equalizer-watch>
                <img src="https://www.jedensvet.cz/download/imgs/12081_hledani-svobody.jpg" alt="Několik lidí, sedících a stojících v místnosti, má protestně přelepená ústa páskou." title="Hledání svobody" loading="lazy">
                <h4>Hledání svobody</h4>
                <p> publikum pozvalo do zemí potýkajících se s různými formami útlaku.
                </p>
            </article>
        </div>
    </div>

    <div class="row align-center">
        <div class="xlarge-6 medium-8 small-12 columns text-center">
            <h3>Debatní program</h3>
        </div>
    </div>
    <div class="row align-center marginTop marginBottom">
        <div class="medium-4 columns  text-center"><div class="stat">123</div> <strong>debat</strong></div>
    </div>
    <div class="row align-center">
        <div class="large-6 medium-12 columns">
            <div class="row align-center marginBottom">
                <div class="large-3 medium-4 small-12 columns text-center marginBottom2"><div class="stat">76</div> <strong>pofilmových</strong></div>
                <div class="large-3 medium-4 small-12  columns text-center marginBottom2"><div class="stat">47</div> <strong>expertních</strong></div>
                <div class="large-3 medium-4 small-12  columns text-center marginBottom2"><div class="stat">2</div> <strong>komorní</strong></div>
                <div class="large-3 medium-4 small-12  columns text-center"><div class="stat">2</div> <strong>filmové pitvy</strong></div>
            </div>
        </div>
    </div>
    <div class="row align-center">
        <div class="large-6 medium-12 columns">
            <p>Jedním ze základních pilířů Jednoho světa jsou debaty, jež témata jednotlivých filmů rozvíjejí a uvádějí je do kontextu. Prioritou organizačního týmu je tak především utváření bezpečného prostoru, v rámci kterého má každý názor stejnou hodnotu. </p>
            <p>
            Debatní program letos nabídnul hned několik diskuzních formátů, do nichž se vedle zahraničního a českého hoststva zapojilo také publikum. Diváci*čky mohli vybírat ze cinefilních filmových pitev i expertních a panelových debat. Právě po panelových a expertních debatách dostalo publikum možnost hlasovat o Divácké ceně nadačního fondu Abakus za mimořádnou debatu, generálního partnera festivalu.
            </p>
        </div>
    </div>
    <div class="row align-center marginTop2">
        <div class="large-8 medium-8 columns">
            <figure>
                <img src="imgs/Foto_debata.jpg" alt="">
                <figcaption>Foto: Karolína Fialová</figcaption>
            </figure>        
        </div>
    </div>
    <div class="row align-center marginTop2">
        <div class="large-6 medium-8 columns">
            <article> 
                <p class="credits">Divácká cena Nadačního fondu Abakus</p>
                <h4>Expertní debata po projekci snímku Zurawski proti státu Texas dne 14. března</h4>
                <p>Hostem vítězné debaty byl amerikanista Jan Beneš, role moderátorky se zhostila Magdalena Dušková. Debata se uskutečnila v kinosále Poslanecké sněmovny Parlamentu České republiky. </p>
            </article>
        </div>
    </div>
</section>

<section id="industry" class="">
    <div class="row">
        <div class="medium-12">
            <h2>Industry</h2>
        </div>
    </div>
    <div class="row align-center align-middle">
        <div class="xlarge-5 medium-8 small-12 columns">
            <h3>East Doc Platform</h3>
            <p>
            Paralelně s Jedním světem každoročně probíhá East Doc Platform, největší akce pro dokmentaristy*ky ve střední a východní Evropě. Pořadatelem akce, jež sdružuje filmové profesionály*ky, je Institut dokumentárního filmu.
            </p>
            <p>    
            Jeden svět a Institut dokumentárního filmu pravidelně spolupracují na organizaci doprovodných akcí pro veřejnost. Diváci*čky Jednoho světa letos mohli vyrazit na panelovou debatu o financování kulturní sféry nebo na panelovou diskuzi o oceňovaném snímku Pan Nikdo proti Putinovi.  
            </p>
        </div>
        <div class="xlarge-5 medium-8 small-12 columns">
            <figure>      
                <img alt="East Doc Platform" src="imgs/Foto_eastdoc.jpg">
                <figcaption>Foto: Štěpán Lohr</figcaption>
            </figure>   
        </div>
    </div>

    <div class="row marginTop align-center">
        <div class="xlarge-6 medium-8 small-12 columns text-center">
            <h3>Hoststvo</h3>
            <div class="text-center marginBottom2 marginTop2"><div class="stat">119</div> <strong>mezinárodních hostů*ek</strong> </div>
            <p>Festival Jeden svět dává prostor lidskoprávním filmům ze všech koutů planety a dlouhodobě tak slouží jako platforma pro diskuzi, jež spojuje napříč kontinenty. </p>
            <p>
            Letošního ročníku se zúčastnilo více než 100 osobností z celého světa. Vedle filmařstva festival přivítal také protagonisty*ky, významné aktivisty*ky či několik mezinárodně uznávaných osobností na poli lidských práv.</p>
        </div>
    </div>
    <div class="row marginTop1 align-center">
        <div class="xlarge-3 large-4 medium-6 small-12 columns">
            <article class="article--portraitImg">
                <figure>
                    <img src="https://muj.jedensvet.cz/filmimages/photo2.ashx?ID=43819&amp;H=500&amp;W=500" alt=" David Borenstein" title=" David Borenstein">
                    <figcaption>Foto: archiv David Borenstein</figcaption>
                </figure>
                <p class="credits">režisér</p>
                <h3>David Borenstein</h3>
                <p>režisér snímků Necítím nic a Pan Nikdo proti Putinovi</p>
                <p>Režisér působící v Kodani, jež se svými dokumenty pravidelně vítězí na významných filmových festivalech, jako je například Sundance či IDFA.</p>
            </article>
        </div>
        <div class="xlarge-3 large-4 medium-6 small-12 columns">
            <article class="article--portraitImg">
                <figure>
                    <img src="https://muj.jedensvet.cz/filmimages/photo2.ashx?ID=41672&amp;H=500&amp;W=500" alt=" Victoria Mapplebeck" title=" Victoria Mapplebeck">
                    <figcaption>Foto: archiv Victoria Mappleback</figcaption>
                </figure>
                <p class="credits">režisérka</p>
                <h3>Victoria Mappleback</h3>
                <p>režisérka snímku Mezi matkou a synem</p>
                <p>Renomovaná britská režisérka a držitelka prestižní ceny BAFTA. Skrze autobiografickou tvorbu objevuje témata spjatá s rodičovstvím, vztahem k technologiím a (nejen) mentálního zdraví. </p>
            </article>
        </div>
        <div class="xlarge-3 large-4 medium-6 small-12 columns">
            <article class="article--portraitImg">
                <figure>
                    <img src="https://muj.jedensvet.cz/filmimages/photo2.ashx?ID=70223&amp;H=500&amp;W=500" alt=" Paolo Woods" title=" Paolo Woods">
                    <figcaption>Foto: archiv Paolo Woods</figcaption>
                </figure>
                <p class="credits">protagonista</p>
                <h3>Paolo Woods</h3>
                <p>protagonista snímku Riverboom </p>
                <p>Fotograf, investigativní novinář a držitel několika cen World Press Photo. Jeho fotografie se objevují v prestižních magazínech National Geographic či Time i na solo výstavách po celém světě.</p>
            </article>
        </div>
        <div class="xlarge-3 large-4 medium-6 small-12 columns">
            <article class="article--portraitImg">
                <figure>
                    <img src="imgs/Foto_sisi2.jpg">
                    <figcaption>Foto: Lukáš Bíba</figcaption>
                </figure>
                <p class="credits">protagonistka</p>
                <h3>Si-Si</h3>
                <p>protagonistka snímku Si-Si</p>
                <p>Původem čínská umělkyně, jež prostřednictvím zpěvu a tance zkoumá vlastní svobodu. </p>
            </article>
        </div>
        <div class="xlarge-3 large-4 medium-6 small-12 columns">
            <article class="article--portraitImg">
                <figure>
                    <img src="https://muj.jedensvet.cz/filmimages/photo2.ashx?ID=69140&amp;H=500&amp;W=500" alt=" Reza Bird" title=" Reza Bird">
                    <figcaption>Foto: archiv Reza Bird</figcaption>
                </figure>
                <p class="credits">režisér</p>
                <h3>Reza Bird</h3>
                <p>režisér snímku Revoluce 3.0</p>
                <p>Oceňovaný íránský režisér žijící v americkém exilu. Ve své tvorbě propojuje příběhy s aktivismem a k filmovému médiu přistupuje jako k nástroji pozitivních soiálních a politických změn.</p>
            </article>
        </div>
        <div class="xlarge-3 large-4 medium-6 small-12 columns">
            <article class="article--portraitImg">
                <figure>
                    <img src="https://muj.jedensvet.cz/filmimages/photo2.ashx?ID=68689&amp;H=500&amp;W=500" alt=" Patricia Franquesa" title=" Patricia Franquesa">
                    <figcaption>Foto: archiv Patricia Franquesa</figcaption>
                </figure>
                <p class="credits">režisérka</p>
                    <h3>Pati Franquesa</h3>
                    <p>režisérka snímku Můj sextortion deník</p>
                    <p>Španělská režisérka a producentka, jejíž filmy působí i mimo kinosály. Filmem Můj sextortion deník soustavně upozorňuje na problematiku sexuálního vydírání.</p>
            </article>        
        </div>
    </div>
</section>        

<section id="rozmer" class="section--neutral section--noMargin">
    <div class="row">
        <div class="medium-12 columns text-center">
            <h2>Celoroční rozměr JS</h2>
        </div>
    </div>
    <div class="row align-center marginTop">
        <div class="xlarge-8 medium-8 small-12 columns text-center marginTop">
            <h3>Jeden svět online</h3>
        </div>
    </div>
    <div class="row align-center marginTop">
        <div class="large-3 medium-4 small-12 columns text-center marginBottom2">
            <div class="stat">1394</div> <strong>registrovaných uživatelů*ek</strong>
        </div>
        <div class="large-3 medium-4 small-12 columns text-center">
            <div class="stat">10</div> <strong>nejnovějších snímků z 27. Jednoho světa</strong>
        </div>
    </div>    
    <div class="row align-center marginTop2 align-middle" style="padding-bottom: 3rem">
        <div class="xlarge-5 medium-8 small-12 columns small-order-2">
            <p>
            Jeden svět projekcemi v kinosálech už dávno nekončí. Díky streamovací platformě Jeden svět online je vybrané filmy možné zhlédnout po celý rok i z pohodlí domova. 
            </p>
            <p>
            Jeden svět online, unikátní VOD platforma, nabízí desítky dokumentárních i hraných filmů a to nejlepší z předchozích let festivalu. Na začátku května 2025 platformu doplnil také výběr 10 dokumentů z aktuálního ročníku.Jako první v České republice letos Jeden svět online rozšířil svou nabídku také o snímky s audiopopisem.  
            </p>
        </div>
        
        <div class="medium-5 columns marginTop2 small-order-1">
        <img src="imgs/Foto_online.jpg" alt="Jeden svět online" loading="lazy">
        </div>
    </div>

    <div class="row align-center">
        <div class="xlarge-8 medium-8 small-12 columns marginTop marginBottom2 text-center">
            <h3>Jeden svět v Bruselu</h3>
        </div>
    </div>
    <div class="row align-center marginBottom">
        <div class="large-3 medium-4 small-12 columns text-center marginBottom2">
            <div class="stat">1321</div> <strong>diváků*aček</strong>
        </div>
        <div class="large-3 medium-4 small-12 columns text-center">
            <div class="stat">7</div> <strong>promítacích míst v Bruselu </strong>
        </div>
    </div>
    <div class="row align-center">
        <div class="xlarge-10 medium-8 small-12 columns text-center">
            <img src="https://www.oneworldinbrussels.com/download/imgs/11514_11202-336787229-1327673008014550-3662590683044541985-n.jpg" alt="Jeden svět v Bruselu" class="hero__img" loading="lazy">
        </div>    
    </div>
    
    <div class="row align-middle align-center marginTop2">
        <div class="xlarge-5 medium-8 small-12 columns text-center">
            <p>
            Jeden svět už po 18. představil vybrané lidskoprávní snímky také v hlavním městě evropských institucí. Bruselská edice festivalu nabídla celkem 10 snímků a 9 expertních debat s politiky*čkami i předními obránci*kyněmi lidských práv.   
            </p>
            <p>
            O Ceně poroty Jednoho světa v Bruselu letos rozhodla porota složená ze Senior Capacity-Building Officer at Human Rights House Foundation Niny Pánikové, EU delegate for the International Federation for Human Rights in Brussels Catherine Absalom and Executive Director of the EUROPEUM Institute for European Policy Martina Vokálka.
            </p>
        </div>
    </div>
    <div class="row align-center marginTop3">
        <div class="medium-4 columns">
            <article>
                <figure>
                    <img alt="Žádná jiná země" src="https://muj.jedensvet.cz/filmimages/image.ashx?I=2&amp;W=437&amp;H=243&amp;ID=0&amp;IMGID=19718" loading="lazy" class="lazyload">
                    <figcaption>Foto: Yabayay Media, Antipode Films</figcaption>
                </figure>   
                <p><strong>Cenu Poroty Jednoho světa v Bruselu za nejlepší film získal snímek Žádná jiná země.</strong></p>
                <p> Film natočený palestinsko-izraelským kolektivem zachycuje systematické násilí, jež izraelská armáda páchá na palestinckém obyvatelstvu, i nečekané přátelství mezi palestinským aktivistou Báselem a izraelským novinářem Yuvalem. </p>
            </article>
        </div>
        <div class="medium-4 columns">
            <article>
                <figure>
                    <img alt="Křídla z prachu" src="https://muj.jedensvet.cz/filmimages/image.ashx?I=2&amp;W=437&amp;H=243&amp;ID=0&amp;IMGID=19848" loading="lazy" class="lazyload">
                    <figcaption>Foto: 5 Stick Films</figcaption>
                </figure> 
                <p><strong>Zvláštní uznání Poroty Jednoho světa v Bruselu získal snímek Křídla z prachu.</strong></p>
                <p> Dokument Giorgia Ghiotta odehrávající se mezi původními obyvateli Peru upozorňuje na environmentální a sociální nespravedlnost. </p>
            </article>
        </div>
    </div>

    <div class="row align-center marginTop">
        <div class="xlarge-8 medium-8 small-12 columns text-center">
            <h3>Promítej Jeden svět</h3>
        </div>
    </div>
    <div class="row align-center marginTop">
        <div class="large-3 medium-4 small-12 columns text-center marginBottom2">
            <div class="stat">&gt; 3000</div><strong>více než 3000 registorvaných promítačů*ek po celém Česku</strong>
        </div>
        <div class="large-3 medium-4 small-12 columns text-center marginBottom2">    
            <div class="stat">695</div> <strong>projekci za rok 2024</strong>
        </div>    
        <div class="large-3 medium-4 small-12 columns text-center marginBottom2">
            <div class="stat">&gt; 80</div><strong>více než 80 filmů </strong>
        </div>
    </div>
    <div class="row align-center marginTop2 marginBottom align-middle">
        <div class="xlarge-5 medium-8 small-12 columns">
            <figure>   
                <img src="imgs/Foto_pit.jpg"  loading="lazy">
                <figcaption>Foto: TadyKino Mělník</figcaption>
            </figure>         
        </div>
        
        <div class="xlarge-5 medium-8 small-12 columns marginTop2">
            <p>
            Díky celoročnímu projektu Promítej Jeden svět! Může vlastní komunitní projekci uspořádat kdokoliv - ať už v místním kině nebo na zahradě. Registrovaní*é promítači*ky mohou vybírat z více než 70 filmů z posledních 14. festivalových ročníků. Promítej Jeden svět! je tak zcela unikátní platformou, jež slouží jako distribuční alternativa lidskoprávních filmů a zprostředkovává prostor pro diskuzi o aktuálních společenských a politických otázkách po celý rok.   
            </p>
        </div>
</section>           

<style>

    video{
            width: 100%;
    }

    .h2--warning{
            color: #df323c;
            text-transform: uppercase;
            margin-block: .5rem;
        }

    .videoWrapper__text{
        
        color: white;
        font-family: "saans_jsbold";
        text-align: center;
    }
    
    .p--date{
        color: #df323c;
        font-size: 1.4rem;
    }

    @media  screen and (min-width: 900px) {
        
        .videoWrapper {
            position: relative;  
        }

        .videoWrapper__text{
            position: absolute;
            bottom: 70px;
            right: -50px;
            width: 410px;
            height: 410px;
            background-color: rgba(0, 0, 0, 1);
            padding: 5rem;
            border-radius: 1000px;
        }
        

        .section--noMargin{
            margin-block: 0;
        }
    }
</style>    
<section id="save" class="section--black section--noMargin">
<div class="row">
    <div class="medium-12 columns">
        
            <div class="videoWrapper">
                <video controls poster="">
                    <source src="/download/video/after2025.mp4" type="video/mp4" />
                    Sorry, your browser doesn't support embedded videos, but you can
                    <a href="/download/video/after2025.mp4" download="after2025.mp4">download the MP4</a>
                </video>
                <div class="videoWrapper__text">
                    <h2>Jeden svět 2026</h2>
                    <h2 class="h2--warning">Save the date</h2>
                    <p>28. ročník Mezinárodního filmového festivalu o lidských právech se ve městech po celém Česku uskuteční v&nbsp;termínu </p>
                    <p class="p--date">od 11. března<br> do 24. dubna 2026</p> 
                </div>
            </div>
        
    </div>
</div>
</section>

    