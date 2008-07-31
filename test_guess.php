<?php
require_once('Guess.php');

$guess = new Guess(array('modeldir' => './train'));

if( $guess->simple_guess("ii") == "too short") {
	echo "too short ok\n";
} else {
	echo "too short not ok: ";
	echo $guess->simple_guess("ii") . "\n";
};
if( $guess->simple_guess("This is a test of the language checker") ==  "english") {
	echo "english ok\n";
} else {
	echo "english not ok\n";
}

if( $guess->simple_guess("Verifions que le détecteur de langues marche") == "french") {
	echo "french ok\n";
} else {
	echo "french not ok\n";
}

if( $guess->simple_guess("Sprawdźmy, czy odgadywacz języków pracuje") == "polish") {
	echo "polish ok\n";
} else {
	echo "polish not ok\n";
}
if( $guess->simple_guess("авай проверить  узнает ли наш угадатель русски язык")=="russian"){echo "russian ok\n";} else { echo "russian not ok\n";}

if( $guess->simple_guess("La respuesta de los acreedores a la oferta argentina para salir del default no ha sido muy positiv")=="spanish"){
	echo "spanish ok\n";} else { echo "spanish not ok\n";}
 if( $guess->simple_guess("Сайлау нәтижесінде дауыстардың басым бөлігін ел премьер министрі Виктор Янукович пен оның қарсыласы, оппозиция жетекшісі Виктор Ющенко алды.")=="kazakh"){echo "kazakh ok\n";} else { echo "kazakh not ok\n";} 
if( $guess->simple_guess("милиция ва уч солиқ идораси ходимлари яраланган. Шаҳарда хавфсизлик чоралари кучайтирилган.")=="uzbek"){echo "uzbek ok\n";} else { echo "uzbek not ok\n";} 
if( $guess->simple_guess("көрбөгөндөй элдик толкундоо болуп, Кокон шаарынын көчөлөрүндө бир нече миң киши нааразылык билдирди.")=="kyrgyz"){echo "kyrgyz ok\n";} else { echo "kyrgyz not ok\n";} 
if( $guess->simple_guess("yakın tarihin en çekişmeli başkanlık seçiminde oy verme işlemi sürerken, katılımda rekor bekleniyor.")=="turkish"){echo "turkish ok\n";} else { echo "turkish not ok\n";} 
 if( $guess->simple_guess("Daxil olan xəbərlərdə deyilir ki, 6 nəfər Bağdadın mərkəzində yerləşən Təhsil Nazirliyinin binası yaxınlığında baş vermiş partlayış zamanı həlak olub.")=="azeri"){echo "azeri ok\n";} else { echo "azeri not ok\n";}
 
 if( $guess->simple_guess("ملايين الناخبين الأمريكيين يدلون بأصواتهم وسط إقبال قياسي على انتخابات هي الأشد تنافسا منذ عقود")=="arabic"){echo "arabic ok\n";} else { echo "arabic not ok\n";}
 if( $guess->simple_guess("Американське суспільство, поділене суперечностями, збирається взяти активну участь у голосуванні")=="ukrainian"){echo "ukrainian ok\n";} else { echo "ukrainian not ok\n";}
 if( $guess->simple_guess("Francouzský ministr financí zmírnil výhrady vůči nízkým firemním daním v nových členských státech EU")=="czech"){echo "czech ok\n";} else { echo "czech not ok\n";}
 if( $guess->simple_guess("biće prilično izjednačena, sugerišu najnovije ankete. Oba kandidata tvrde da su sposobni da dobiju rat protiv terorizma")=="croatian"){echo "croatian ok\n";} else { echo "croatian not ok\n";}
 if( $guess->simple_guess("е готов да даде гаранции, че няма да прави ядрено оръжие, ако му се разреши мирна атомна програма")=="bulgarian"){echo "bulgarian ok\n";} else { echo "bulgarian not ok\n";}
 if( $guess->simple_guess("на јавното мислење покажуваат дека трката е толку тесна, што се очекува двајцата соперници да ја прекршат традицијата и да се појават и на самиот изборен ден.")=="macedonian"){echo "macedonian ok\n";} else { echo "macedonian not ok\n";}
 if( $guess->simple_guess("în acest sens aparţinînd Adunării Generale a organizaţiei, în ciuda faptului că mai multe dintre solicitările organizaţiei privind organizarea scrutinului nu au fost soluţionate")=="romanian"){echo "romanian ok\n";} else { echo "romanian not ok\n";}
 if( $guess->simple_guess("kaluan ditën e fundit të fushatës në shtetet kryesore për të siguruar sa më shumë votues.")=="albanian"){echo "albanian ok\n";} else { echo "albanian not ok\n";}
 if( $guess->simple_guess("αναμένεται να σπάσουν παράδοση δεκαετιών και να συνεχίσουν την εκστρατεία τους ακόμη και τη μέρα των εκλογών")=="greek"){echo "greek ok\n";} else { echo "greek not ok\n";}
 if( $guess->simple_guess("美国各州选民今天开始正式投票。据信，")=="chinese"){echo "chinese ok\n";} else { echo "chinese not ok\n";}
 if( $guess->simple_guess("Die kritiek was volgens hem bitter hard nodig, omdat Nederland binnen een paar jaar in een soort Belfast zou dreigen te veranderen")=="dutch"){echo "dutch ok\n";} else { echo "dutch not ok\n";}
 if( $guess->simple_guess("På denne side bringer vi billeder fra de mange forskellige forberedelser til arrangementet, efterhånden som vi får dem ")=="danish"){echo "danish ok\n";} else { echo "danish not ok\n";}
 if( $guess->simple_guess("Vi säger att Frälsningen är en gåva till alla, fritt och för intet.  Men som vi nämnt så finns det två villkor som måste")=="swedish"){echo "swedish ok\n";} else { echo "swedish not ok\n";}
 if( $guess->simple_guess("Nominasjonskomiteen i Akershus KrF har skviset ut Einar Holstad fra stortingslisten. Ytre Enebakk-mannen har plass p Stortinget s lenge Valgerd Svarstad Haugland sitter i")=="norwegian"){echo "norwegian ok\n";} else { echo "norwegian not ok\n";}
 if( $guess->simple_guess("on julkishallinnon verkkopalveluiden yhteinen osoite. Kansalaisten arkielämää helpottavaa tietoa on koottu eri aihealueisiin")=="finnish"){echo "finnish ok\n";} else { echo "finnish not ok\n";}
 if( $guess->simple_guess("Ennetamaks reisil ebameeldivaid vahejuhtumeid vii end kurssi reisidokumentide ja viisade reeglitega ning muu praktilise informatsiooniga")=="estonian"){echo "estonian ok\n";} else { echo "estonian not ok\n";}
 if( $guess->simple_guess("Hiába jön létre az önkéntes magyar haderő, hiába nem lesz többé bevonulás, változatlanul fennmarad a hadkötelezettség intézménye")=="hungarian"){echo "hungarian ok\n";} else { echo "hungarian not ok\n";}
  if( $guess->simple_guess("հարաբերական")=="armenian"){echo "armenian ok\n";} else { echo "armenian not ok\n";}
exit("ALL FINISHED\n");
?> 
 
