<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkshopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('workshops')->insert([
            ['name'=>'Wymiana Autka','phone_number'=>'809503611','description'=>'Lorem ipsum','email'=>'rhyme@mail.com','workshop_type_id'=>1,'address_id'=>10],
            ['name'=>'U Piotera','phone_number'=>'024988697','description'=>'Lorem ipsum','email'=>'steam@mail.com','workshop_type_id'=>1,'address_id'=>38],
            ['name'=>'TUV','phone_number'=>'643847163','description'=>'Lorem ipsum','email'=>'because@mail.com','workshop_type_id'=>5,'address_id'=>14],
            ['name'=>'Dumyja','phone_number'=>'975163859','description'=>'Lorem ipsum','email'=>'ahead@mail.com','workshop_type_id'=>2,'address_id'=>9],
            ['name'=>'Parczewskie centrum naprawy','phone_number'=>'519037548','description'=>'Lorem ipsum','email'=>'mission@mail.com','workshop_type_id'=>4,'address_id'=>19],
            ['name'=>'Duże Ciągi','phone_number'=>'428420520','description'=>'Lorem ipsum','email'=>'forest@mail.com','workshop_type_id'=>1,'address_id'=>93],
            ['name'=>'Garaż pod zepsutą latarnią','phone_number'=>'165489832','description'=>'Lorem ipsum','email'=>'mix@mail.com','workshop_type_id'=>5,'address_id'=>36],
            ['name'=>'Super warsztat','phone_number'=>'559095762','description'=>'Lorem ipsum','email'=>'how@mail.com','workshop_type_id'=>2,'address_id'=>76],
            ['name'=>'Drogie drogi','phone_number'=>'185073852','description'=>'Lorem ipsum','email'=>'shape@mail.com','workshop_type_id'=>2,'address_id'=>39],
            ['name'=>'Galoty','phone_number'=>'214295577','description'=>'Lorem ipsum','email'=>'lamp@mail.com','workshop_type_id'=>4,'address_id'=>48],
            ['name'=>'Wyjątkowy warsztat mistrza Stacha','phone_number'=>'973326884','description'=>'Lorem ipsum','email'=>'noise@mail.com','workshop_type_id'=>3,'address_id'=>65],
            ['name'=>'Uczeba','phone_number'=>'249925124','description'=>'Lorem ipsum','email'=>'upward@mail.com','workshop_type_id'=>5,'address_id'=>63],
            ['name'=>'Łubu-Dubu','phone_number'=>'204685948','description'=>'Lorem ipsum','email'=>'at@mail.com','workshop_type_id'=>4,'address_id'=>35],
            ['name'=>'U Majstra','phone_number'=>'223478877','description'=>'Lorem ipsum','email'=>'cloud@mail.com','workshop_type_id'=>5,'address_id'=>17],
            ['name'=>'Na dworze','phone_number'=>'403625257','description'=>'Lorem ipsum','email'=>'gone@mail.com','workshop_type_id'=>5,'address_id'=>57],
            ['name'=>'U Matiego','phone_number'=>'907224192','description'=>'Lorem ipsum','email'=>'jump@mail.com','workshop_type_id'=>4,'address_id'=>79],
            ['name'=>'Wyczesany','phone_number'=>'662063577','description'=>'Lorem ipsum','email'=>'pile@mail.com','workshop_type_id'=>4,'address_id'=>40],
            ['name'=>'Gites Majonez','phone_number'=>'841935013','description'=>'Lorem ipsum','email'=>'unit@mail.com','workshop_type_id'=>3,'address_id'=>22],
            ['name'=>'Kurde Balans','phone_number'=>'036472280','description'=>'Lorem ipsum','email'=>'force@mail.com','workshop_type_id'=>2,'address_id'=>50],
            ['name'=>'Nad brudnym, zardzewiałym Maluchem','phone_number'=>'572705823','description'=>'Lorem ipsum','email'=>'age@mail.com','workshop_type_id'=>1,'address_id'=>51],
            ['name'=>'Fury Mana','phone_number'=>'857998750','description'=>'Lorem ipsum','email'=>'hit@mail.com','workshop_type_id'=>4,'address_id'=>2],
            ['name'=>'U Pimpka','phone_number'=>'530717638','description'=>'Lorem ipsum','email'=>'split@mail.com','workshop_type_id'=>4,'address_id'=>63],
            ['name'=>'Ale Fura!','phone_number'=>'239489378','description'=>'Lorem ipsum','email'=>'matter@mail.com','workshop_type_id'=>4,'address_id'=>3],
            ['name'=>'Piąty Bieg','phone_number'=>'576171446','description'=>'Lorem ipsum','email'=>'blow@mail.com','workshop_type_id'=>2,'address_id'=>100],
            ['name'=>'Mocny Gaz','phone_number'=>'891899266','description'=>'Lorem ipsum','email'=>'faster@mail.com','workshop_type_id'=>2,'address_id'=>97],
            ['name'=>'Fajer Fura','phone_number'=>'813141758','description'=>'Lorem ipsum','email'=>'radio@mail.com','workshop_type_id'=>2,'address_id'=>60],
            ['name'=>'Cośtam','phone_number'=>'022509941','description'=>'Lorem ipsum','email'=>'swung@mail.com','workshop_type_id'=>5,'address_id'=>37],
            ['name'=>'PGE-USG-RTV-KGB','phone_number'=>'330356130','description'=>'Lorem ipsum','email'=>'suit@mail.com','workshop_type_id'=>1,'address_id'=>45],
            ['name'=>'U Stefka','phone_number'=>'116116960','description'=>'Lorem ipsum','email'=>'shelter@mail.com','workshop_type_id'=>4,'address_id'=>17],
            ['name'=>'MEGA FAJER SUPER HIPER','phone_number'=>'677340014','description'=>'Lorem ipsum','email'=>'art@mail.com','workshop_type_id'=>2,'address_id'=>72],
            ['name'=>'Sprzęcirry','phone_number'=>'663922434','description'=>'Lorem ipsum','email'=>'nine@mail.com','workshop_type_id'=>1,'address_id'=>43],
            ['name'=>'Zrób-se-sam','phone_number'=>'040444847','description'=>'Lorem ipsum','email'=>'universe@mail.com','workshop_type_id'=>3,'address_id'=>50],
            ['name'=>'Gwinty','phone_number'=>'691024866','description'=>'Lorem ipsum','email'=>'upon@mail.com','workshop_type_id'=>4,'address_id'=>43],
            ['name'=>'Śruba i Truba','phone_number'=>'793467512','description'=>'Lorem ipsum','email'=>'describe@mail.com','workshop_type_id'=>4,'address_id'=>7],
            ['name'=>'Alternatywka','phone_number'=>'307644541','description'=>'Lorem ipsum','email'=>'porch@mail.com','workshop_type_id'=>1,'address_id'=>42],
            ['name'=>'Sztos','phone_number'=>'512039043','description'=>'Lorem ipsum','email'=>'doing@mail.com','workshop_type_id'=>1,'address_id'=>87],
            ['name'=>'Eluwina','phone_number'=>'883118600','description'=>'Lorem ipsum','email'=>'compound@mail.com','workshop_type_id'=>1,'address_id'=>89],
            ['name'=>'Dzban','phone_number'=>'627760603','description'=>'Lorem ipsum','email'=>'grade@mail.com','workshop_type_id'=>4,'address_id'=>84],
            ['name'=>'U masnego Józka','phone_number'=>'193261829','description'=>'Lorem ipsum','email'=>'possibly@mail.com','workshop_type_id'=>3,'address_id'=>46],
            ['name'=>'Jołki-Połkki','phone_number'=>'812208946','description'=>'Lorem ipsum','email'=>'whether@mail.com','workshop_type_id'=>2,'address_id'=>7],
            ['name'=>'Warsztat xD','phone_number'=>'796510560','description'=>'Lorem ipsum','email'=>'biggest@mail.com','workshop_type_id'=>3,'address_id'=>73],
            ['name'=>'Psubrat','phone_number'=>'044822379','description'=>'Lorem ipsum','email'=>'term@mail.com','workshop_type_id'=>5,'address_id'=>25],
            ['name'=>'Pud','phone_number'=>'385891759','description'=>'Lorem ipsum','email'=>'please@mail.com','workshop_type_id'=>5,'address_id'=>67],
            ['name'=>'Weźnodaj','phone_number'=>'315788747','description'=>'Lorem ipsum','email'=>'felt@mail.com','workshop_type_id'=>4,'address_id'=>69],
            ['name'=>'Tek','phone_number'=>'921824531','description'=>'Lorem ipsum','email'=>'concerned@mail.com','workshop_type_id'=>2,'address_id'=>72],
            ['name'=>'Safanduła','phone_number'=>'228809002','description'=>'Lorem ipsum','email'=>'ten@mail.com','workshop_type_id'=>2,'address_id'=>22],
            ['name'=>'Kinżał','phone_number'=>'876055186','description'=>'Lorem ipsum','email'=>'grew@mail.com','workshop_type_id'=>5,'address_id'=>11],
            ['name'=>'Gal Netoli','phone_number'=>'446988789','description'=>'Lorem ipsum','email'=>'eat@mail.com','workshop_type_id'=>3,'address_id'=>39],
            ['name'=>'Małdrzyk','phone_number'=>'244290068','description'=>'Lorem ipsum','email'=>'sentence@mail.com','workshop_type_id'=>3,'address_id'=>43],
            ['name'=>'Piłka Linka','phone_number'=>'641789805','description'=>'Lorem ipsum','email'=>'mother@mail.com','workshop_type_id'=>1,'address_id'=>25],
            ['name'=>'Narodowe Centrum Diagnostyczne Pojazdów Mechanicznych','phone_number'=>'774929604','description'=>'Lorem ipsum','email'=>'nature@mail.com','workshop_type_id'=>1,'address_id'=>6],
            ['name'=>'Ale czad','phone_number'=>'337111834','description'=>'Lorem ipsum','email'=>'sheet@mail.com','workshop_type_id'=>3,'address_id'=>25],
            ['name'=>'U Bolka','phone_number'=>'527185806','description'=>'Lorem ipsum','email'=>'claws@mail.com','workshop_type_id'=>4,'address_id'=>29],
            ['name'=>'DROP TABLE warsztaty','phone_number'=>'969768427','description'=>'Lorem ipsum','email'=>'bell@mail.com','workshop_type_id'=>2,'address_id'=>36],
            ['name'=>'Szur Tank','phone_number'=>'731652907','description'=>'Lorem ipsum','email'=>'jungle@mail.com','workshop_type_id'=>2,'address_id'=>5],
            ['name'=>'Piona Dziesiona','phone_number'=>'316534628','description'=>'Lorem ipsum','email'=>'orange@mail.com','workshop_type_id'=>3,'address_id'=>34],
            ['name'=>'Pietnacha i Czacha','phone_number'=>'328945788','description'=>'Lorem ipsum','email'=>'involved@mail.com','workshop_type_id'=>3,'address_id'=>76],
            ['name'=>'MackaPacka','phone_number'=>'865808295','description'=>'Lorem ipsum','email'=>'bottom@mail.com','workshop_type_id'=>3,'address_id'=>11],
            ['name'=>'Wiadero','phone_number'=>'930348412','description'=>'Lorem ipsum','email'=>'elephant@mail.com','workshop_type_id'=>3,'address_id'=>73],
            ['name'=>'Warsztat 2','phone_number'=>'128388154','description'=>'Lorem ipsum','email'=>'except@mail.com','workshop_type_id'=>2,'address_id'=>95],
            ['name'=>'Warsztat 3','phone_number'=>'675651823','description'=>'Lorem ipsum','email'=>'divide@mail.com','workshop_type_id'=>3,'address_id'=>55],
            ['name'=>'Warsztat 4','phone_number'=>'574478339','description'=>'Lorem ipsum','email'=>'widely@mail.com','workshop_type_id'=>5,'address_id'=>15],
            ['name'=>'Warsztat 5','phone_number'=>'926750736','description'=>'Lorem ipsum','email'=>'science@mail.com','workshop_type_id'=>5,'address_id'=>19],
            ['name'=>'Warsztat 8','phone_number'=>'493786841','description'=>'Lorem ipsum','email'=>'completely@mail.com','workshop_type_id'=>3,'address_id'=>77],
            ['name'=>'Warsztat 10','phone_number'=>'655488949','description'=>'Lorem ipsum','email'=>'useful@mail.com','workshop_type_id'=>4,'address_id'=>12],
            ['name'=>'Warsztat 11','phone_number'=>'850996917','description'=>'Lorem ipsum','email'=>'promised@mail.com','workshop_type_id'=>4,'address_id'=>20],
            ['name'=>'Warsztat 12','phone_number'=>'596581151','description'=>'Lorem ipsum','email'=>'shadow@mail.com','workshop_type_id'=>5,'address_id'=>25],
            ['name'=>'Warsztat 13','phone_number'=>'326007766','description'=>'Lorem ipsum','email'=>'curve@mail.com','workshop_type_id'=>2,'address_id'=>86],
            ['name'=>'Warsztat 14','phone_number'=>'144574161','description'=>'Lorem ipsum','email'=>'species@mail.com','workshop_type_id'=>5,'address_id'=>22],
            ['name'=>'Warsztat 15','phone_number'=>'408317882','description'=>'Lorem ipsum','email'=>'announced@mail.com','workshop_type_id'=>2,'address_id'=>10],
            ['name'=>'Warsztat 16','phone_number'=>'149248743','description'=>'Lorem ipsum','email'=>'beside@mail.com','workshop_type_id'=>3,'address_id'=>80],
            ['name'=>'Warsztat 17','phone_number'=>'844424385','description'=>'Lorem ipsum','email'=>'truck@mail.com','workshop_type_id'=>4,'address_id'=>46],
            ['name'=>'Warsztat 19','phone_number'=>'902568375','description'=>'Lorem ipsum','email'=>'rain@mail.com','workshop_type_id'=>2,'address_id'=>3],
            ['name'=>'Warsztat 20','phone_number'=>'290238635','description'=>'Lorem ipsum','email'=>'mainly@mail.com','workshop_type_id'=>4,'address_id'=>73],
            ['name'=>'Warsztat 21','phone_number'=>'038153134','description'=>'Lorem ipsum','email'=>'hurried@mail.com','workshop_type_id'=>3,'address_id'=>12],
            ['name'=>'Warsztat 22','phone_number'=>'534241788','description'=>'Lorem ipsum','email'=>'lay@mail.com','workshop_type_id'=>4,'address_id'=>27],
            ['name'=>'Warsztat 23','phone_number'=>'210192798','description'=>'Lorem ipsum','email'=>'tip@mail.com','workshop_type_id'=>2,'address_id'=>96],
            ['name'=>'Warsztat 24','phone_number'=>'637231646','description'=>'Lorem ipsum','email'=>'air@mail.com','workshop_type_id'=>5,'address_id'=>34],
            ['name'=>'Warsztat 25','phone_number'=>'004607668','description'=>'Lorem ipsum','email'=>'under@mail.com','workshop_type_id'=>2,'address_id'=>86],
            ['name'=>'Warsztat 26','phone_number'=>'023031036','description'=>'Lorem ipsum','email'=>'does@mail.com','workshop_type_id'=>3,'address_id'=>14],
            ['name'=>'Warsztat 28','phone_number'=>'200003945','description'=>'Lorem ipsum','email'=>'leaf@mail.com','workshop_type_id'=>5,'address_id'=>85],
            ['name'=>'Warsztat 29','phone_number'=>'056393233','description'=>'Lorem ipsum','email'=>'machine@mail.com','workshop_type_id'=>1,'address_id'=>56],
            ['name'=>'Warsztat 30','phone_number'=>'072331422','description'=>'Lorem ipsum','email'=>'mental@mail.com','workshop_type_id'=>2,'address_id'=>16],
            ['name'=>'Warsztat 31','phone_number'=>'101218067','description'=>'Lorem ipsum','email'=>'mind@mail.com','workshop_type_id'=>2,'address_id'=>22],
            ['name'=>'Warsztat 32','phone_number'=>'823593321','description'=>'Lorem ipsum','email'=>'tower@mail.com','workshop_type_id'=>3,'address_id'=>40],
            ['name'=>'Warsztat 34','phone_number'=>'196839825','description'=>'Lorem ipsum','email'=>'rocky@mail.com','workshop_type_id'=>4,'address_id'=>52],
            ['name'=>'Warsztat 36','phone_number'=>'721138683','description'=>'Lorem ipsum','email'=>'good@mail.com','workshop_type_id'=>1,'address_id'=>35],
            ['name'=>'Warsztat 37','phone_number'=>'681541115','description'=>'Lorem ipsum','email'=>'system@mail.com','workshop_type_id'=>5,'address_id'=>14],
            ['name'=>'Warsztat 38','phone_number'=>'435264100','description'=>'Lorem ipsum','email'=>'excitement@mail.com','workshop_type_id'=>2,'address_id'=>66],
            ['name'=>'Warsztat 41','phone_number'=>'848347063','description'=>'Lorem ipsum','email'=>'everything@mail.com','workshop_type_id'=>3,'address_id'=>19],
            ['name'=>'Warsztat 42','phone_number'=>'819801287','description'=>'Lorem ipsum','email'=>'putting@mail.com','workshop_type_id'=>4,'address_id'=>28],
            ['name'=>'Warsztat 43','phone_number'=>'773465403','description'=>'Lorem ipsum','email'=>'hat@mail.com','workshop_type_id'=>2,'address_id'=>78],
            ['name'=>'Warsztat 45','phone_number'=>'379796778','description'=>'Lorem ipsum','email'=>'coach@mail.com','workshop_type_id'=>3,'address_id'=>32],
            ['name'=>'Warsztat 47','phone_number'=>'731202039','description'=>'Lorem ipsum','email'=>'poor@mail.com','workshop_type_id'=>4,'address_id'=>100],
            ['name'=>'Warsztat 49','phone_number'=>'967199629','description'=>'Lorem ipsum','email'=>'cup@mail.com','workshop_type_id'=>3,'address_id'=>16],
            ['name'=>'Warsztat 50','phone_number'=>'822639480','description'=>'Lorem ipsum','email'=>'rule@mail.com','workshop_type_id'=>3,'address_id'=>8],
            ['name'=>'Warsztat 51','phone_number'=>'846332149','description'=>'Lorem ipsum','email'=>'turn@mail.com','workshop_type_id'=>2,'address_id'=>89],
            ['name'=>'Automłoty','phone_number'=>'013352999','description'=>'Lorem ipsum','email'=>'apartment@mail.com','workshop_type_id'=>3,'address_id'=>67],
            ['name'=>'wojtek wez tu wstaw jakies rekordy','phone_number'=>'749448992','description'=>'Lorem ipsum','email'=>'fastened@mail.com','workshop_type_id'=>1,'address_id'=>35],
            ['name'=>'Pozdrawiam pana prowadzącego','phone_number'=>'946469780','description'=>'Lorem ipsum','email'=>'successful@mail.com','workshop_type_id'=>2,'address_id'=>62],
            ['name'=>'Siema Lublin','phone_number'=>'277737386','description'=>'Lorem ipsum','email'=>'is@mail.com','workshop_type_id'=>5,'address_id'=>14],
            ['name'=>'haha autko robi wrrrrr','phone_number'=>'368702052','description'=>'Lorem ipsum','email'=>'dozen@mail.com','workshop_type_id'=>3,'address_id'=>100],
            ['name'=>'Bziumkacze','phone_number'=>'770906594','description'=>'Lorem ipsum','email'=>'slight@mail.com','workshop_type_id'=>2,'address_id'=>3],
            ['name'=>'Pięć ton czystego złomu','phone_number'=>'961508352','description'=>'Lorem ipsum','email'=>'hand@mail.com','workshop_type_id'=>2,'address_id'=>96],
            ['name'=>'Sayonarada','phone_number'=>'218680747','description'=>'Lorem ipsum','email'=>'circle@mail.com','workshop_type_id'=>3,'address_id'=>77]
        ]);
        DB::table('workshops')->insert([
            ['name'=>'Grząbka','phone_number'=>'021704894','email'=>'gas@mail.com','workshop_type_id'=>5,'address_id'=>1],
            ['name'=>'Przynęta','phone_number'=>'575270905','email'=>'snow@mail.com','workshop_type_id'=>4,'address_id'=>60],
            ['name'=>'Potrzebie','phone_number'=>'273215897','email'=>'various@mail.com','workshop_type_id'=>5,'address_id'=>8],
            ['name'=>'Farawenda','phone_number'=>'040471835','email'=>'take@mail.com','workshop_type_id'=>5,'address_id'=>88],
            ['name'=>'Katakierka','phone_number'=>'606502214','email'=>'opportunity@mail.com','workshop_type_id'=>1,'address_id'=>38],
            ['name'=>'VIVA','phone_number'=>'199128081','email'=>'differ@mail.com','workshop_type_id'=>3,'address_id'=>62],
            ['name'=>'Automoty','phone_number'=>'814296773','email'=>'still@mail.com','workshop_type_id'=>3,'address_id'=>47],
            ['name'=>'Tyndy-Ryndy','phone_number'=>'981502103','email'=>'heavy@mail.com','workshop_type_id'=>5,'address_id'=>19],
            ['name'=>'Odpicuj mi Furę','phone_number'=>'994703750','email'=>'red@mail.com','workshop_type_id'=>2,'address_id'=>40],
            ['name'=>'Odjechany','phone_number'=>'846012899','email'=>'anything@mail.com','workshop_type_id'=>1,'address_id'=>64],
            ['name'=>'Gites Commites','phone_number'=>'261341897','email'=>'neck@mail.com','workshop_type_id'=>3,'address_id'=>58],
            ['name'=>'Na Ręcznym','phone_number'=>'598115353','email'=>'loss@mail.com','workshop_type_id'=>2,'address_id'=>65],
            ['name'=>'U Psujka','phone_number'=>'324139190','email'=>'forgot@mail.com','workshop_type_id'=>2,'address_id'=>21],
            ['name'=>'Wichajstry','phone_number'=>'856695944','email'=>'teach@mail.com','workshop_type_id'=>3,'address_id'=>85],
            ['name'=>'Hiper-Giper','phone_number'=>'562778649','email'=>'frog@mail.com','workshop_type_id'=>1,'address_id'=>29],
            ['name'=>'U Złomiarza','phone_number'=>'957274934','email'=>'pick@mail.com','workshop_type_id'=>5,'address_id'=>38],
            ['name'=>'Swiłka','phone_number'=>'175436503','email'=>'flew@mail.com','workshop_type_id'=>2,'address_id'=>2],
            ['name'=>'U Waldka','phone_number'=>'075537027','email'=>'waste@mail.com','workshop_type_id'=>4,'address_id'=>95],
            ['name'=>'Pugilares','phone_number'=>'480112035','email'=>'total@mail.com','workshop_type_id'=>4,'address_id'=>82],
            ['name'=>'krzynka','phone_number'=>'505422341','email'=>'bill@mail.com','workshop_type_id'=>2,'address_id'=>90],
            ['name'=>'E-utka','phone_number'=>'528661204','email'=>'environment@mail.com','workshop_type_id'=>4,'address_id'=>84],
            ['name'=>'Huba buba','phone_number'=>'125229503','email'=>'adjective@mail.com','workshop_type_id'=>5,'address_id'=>87],
            ['name'=>'Wrummm','phone_number'=>'032361933','email'=>'quarter@mail.com','workshop_type_id'=>1,'address_id'=>91],
            ['name'=>'Nanananana','phone_number'=>'110588833','email'=>'provide@mail.com','workshop_type_id'=>3,'address_id'=>43],
            ['name'=>'Na bosaka','phone_number'=>'587437541','email'=>'transportation@mail.com','workshop_type_id'=>2,'address_id'=>55],
            ['name'=>'Naprawianie','phone_number'=>'935778395','email'=>'hunt@mail.com','workshop_type_id'=>3,'address_id'=>26],
            ['name'=>'Pompowanie','phone_number'=>'371067779','email'=>'label@mail.com','workshop_type_id'=>4,'address_id'=>40],
            ['name'=>'Warsztat 1','phone_number'=>'274834879','email'=>'breakfast@mail.com','workshop_type_id'=>5,'address_id'=>72],
            ['name'=>'Warsztat 6','phone_number'=>'508184760','email'=>'obtain@mail.com','workshop_type_id'=>4,'address_id'=>23],
            ['name'=>'Warsztat 7','phone_number'=>'494042887','email'=>'process@mail.com','workshop_type_id'=>5,'address_id'=>76],
            ['name'=>'Warsztat 9','phone_number'=>'823610925','email'=>'past@mail.com','workshop_type_id'=>5,'address_id'=>76],
            ['name'=>'Warsztat 18','phone_number'=>'841603793','email'=>'lake@mail.com','workshop_type_id'=>3,'address_id'=>6],
            ['name'=>'Warsztat 27','phone_number'=>'867629426','email'=>'former@mail.com','workshop_type_id'=>5,'address_id'=>32],
            ['name'=>'Warsztat 33','phone_number'=>'842188287','email'=>'club@mail.com','workshop_type_id'=>1,'address_id'=>33],
            ['name'=>'Warsztat 35','phone_number'=>'170681466','email'=>'silence@mail.com','workshop_type_id'=>2,'address_id'=>26],
            ['name'=>'Warsztat 39','phone_number'=>'683415615','email'=>'particularly@mail.com','workshop_type_id'=>4,'address_id'=>56],
            ['name'=>'Warsztat 40','phone_number'=>'256077284','email'=>'particles@mail.com','workshop_type_id'=>2,'address_id'=>33],
            ['name'=>'Warsztat 44','phone_number'=>'074390966','email'=>'box@mail.com','workshop_type_id'=>3,'address_id'=>79],
            ['name'=>'Warsztat 46','phone_number'=>'625902423','email'=>'may@mail.com','workshop_type_id'=>5,'address_id'=>43],
            ['name'=>'Warsztat 48','phone_number'=>'000483153','email'=>'warn@mail.com','workshop_type_id'=>2,'address_id'=>98],
            ['name'=>'Warsztat 53','phone_number'=>'642206817','email'=>'basket@mail.com','workshop_type_id'=>4,'address_id'=>57],
            ['name'=>'Warsztat 61','phone_number'=>'593169343','email'=>'number@mail.com','workshop_type_id'=>3,'address_id'=>45],
            ['name'=>'Warsztat 67','phone_number'=>'598147148','email'=>'labor@mail.com','workshop_type_id'=>5,'address_id'=>50],
            ['name'=>'Warsztat 71','phone_number'=>'901723922','email'=>'wire@mail.com','workshop_type_id'=>3,'address_id'=>24]
        ]);
    }
}
