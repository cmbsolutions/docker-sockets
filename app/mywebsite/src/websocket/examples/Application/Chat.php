<?php

declare(strict_types=1);

namespace BloatlessModified\WebSocket\Examples\Application;

use BloatlessModified\WebSocket\Application\Application;
use BloatlessModified\WebSocket\Connection;

class Chat extends Application
{
    private array $randomNames = ['Chuck_Norris','Babybluez','Date_Me','Actuallynotchrishemsworth','Butt_Smasher','Chalametbmybae','Colonel_Mustards_Rope','Toastcrunch','Name_Is_In_Use','Roflol_God','Dixie_Rect','Notthetigerking','Exhilarated','Oprah_Wind_Fury','Colonel_Mustards_Rope','Wustache_Max','Not_James_Bond','Rejectedbachelorcontestant','AsDucks','Nadia_Seymour','Monkey_See','Furreal','Cowabunga_Dude','Hotgirlbummer','Chalametbmybae','Hitch_Hiker','Wilma_Fingerdoo','Magicschoolbusdropout','My_Anaconda_Does','Thegodfatherpart','Lactose_The_Intolerant','Rejected_Bachelor_Contestant','Schmoople','Me_For_President','Count_Swagula','Carmelpoptart','Thesilentbang','Garythesnail','Ruthlessslayer','Personallyvictimizedbyreginageorge','Bread_Pitt','Merry','Friedchocolate','Theafterlife','Scream','Droolingonu','Bros_Before_Hoes','Joe_Not_Exotic','Notmuchtoit','Courtesyflush','I_Boop_Ur_Nose','Lovemeknot','Sweetp','Heisenberg_Blue','Itchy_And_Scratchy','Takingver','Priceless','Joan_Of_Arks_Angel','Tin_Foil_Hat','Spongebobspineapple','Chickenriceandbeans','Shadowbanned','Snax','Thehornoftheunicorn','Wherearetheavocados','Misspiggysdimples','Jocular','Hotbutterypopcorn','Rawr_Means_Iloveyou','Chris_P_Bacon','Basic_Vegan','Coolshirtbra','Peterparkerspuberty','Having_Things_Todo','2oldforthis','Xboxshutdown','Twentyfourhour_Pharmacy','Lee_Keyrear','Drunkbetch','How_You_Doing','Instaprincess','Supermagnificentextreme','Take_Your_Pants_Off','Fartnroses','Banana_Hammock','Courtesyflush','Noisy','Black_Knight','Applebottomjeans','No_Child_Support','Willie_B_Hardigan','Freddymercuryscat','Barbiebreath','Hereswonderwall','Joyfull','Lizzosflute','Say_My_Name','Yesimfunny','Suck_My_Popsicle','Pawneegoddess','No_This_Is_Patrick','Khaleesisfourthdragon','Drooling_On_You','An_Innocent_Child','Paninihead','It’S_A__Political__Statement','Mirthful','Hogwartsfailure','Fatbatman','Fartoolong','Billies_Eyelash','Morgan_Freeman_But_Not','Peter_Parkers_Puberty','Sewersquirrel','Anonymouse','Cereal_Killer','One_Ton_Soup','Spongebobspineapple','Magicschoolbus_Dropout','Schmoople','Nachocheesefries','May_I_Tutchem','Rootintootinputin','What_Does_This_Button_Do','Llama_Del_Rey','All_Goodnames_R_Gone','Average_Forum_User','Freehugz','Reese_Withoutaspoon','Chickychickyparmparm','Rollingbarrelz','Viewer_Discretion_Advised','Not_Funny','Ineedp','Pnut','I_Yellalot','Kentucky_Cried_Fricken','Unnecessary','Sweet_Pete','Intelligent_Zombie','Just_A_Teen','Omnipotent_Being','Everythingbagelwithvegancreamcheese','Adolf_Oliver_Nipple','Dangerous_With_Rocks','Dusty_Bawls','Heyyou','Ineed_2p','Quailandduckeggs','Bill_Nye_The_Russian_Spy','Peapds','Applebottom_Jeans','Basic_Teen','Buh-Buh-','12nuns','Norma_Scock','Droolingonu','Morgan_Freeman_But_Not','Courtesy_Flush','Scoobycute','Magic_Fetus','Willie_Eetmioutt','Not_Good_Name','Baby_Bugga_Boo','Instaprincess','Frolicsome','Behind_You','Granger_Danger','Mother_Of_Dragons','Herpes_Free_Since_03','Fedora_The_Explorer','Protect_Ya_Neck','Airiswindy','Hereswonderwall','Iwasreloading','Not-Insync','Cheeseinabag','Nuggetz','Adobo_Ahai','Im_An_Accountant','Redmonkeybutt','Addison_Rae_Of_Sunshine','Who_Am_I','Builtdifferent','Teabaggins','I_Boop_Ur_Nose','Hans_Ohff','Heres_Wonderwall','Love_Me_Knot','Calzone_Zone','Blueivysassistant','Theaverageforumuser','Hanging_With_My_Gnomies','Onetonsoup','Strike_U_R_Out','Hairypoppins','Fizzysodas','Crazy_Cat_Lady','Renegademaster','Cute_As_Ducks','Kenny_Dewitt','Jesusochristo','Not_My_Idea','Craven_Moorehead','Ariana_Grandes_Sweatshirt','Youintradouchingmyshelf','My_Name_Is','Definitely_Not_An_Athlete','Side-Splitting','Ben_Dover','Ironmansnap','Itchy_And_Scratchy','Humorous','Dixon_Kuntz','Hello_Im_Creepy','Oliver_Clothes_Off','Heartticker','Xbox_Sign_Out','Hogwartsfailure','Cereal_Killer','Something','Pierre_Pants','Prince_Charming','Unicrns','Moms_Spaghetti','Patty_Meltt','I_Was_A_Mistake','Everybody','Leslieknopesbinder','Avo_Cuddle','Hugs_For_Drugs','Funnycatvidz','Toiletpaperman','Santas_Number_Elf','Convivial','Thekidscallmeboss','Unnecessary','Cuddly-Wuddly','Saintbroseph','Jovial','Mastercheif','Hey_You','Infernalheir','Severusvape','Courtesyflush','Gary_Thesnail','Born_Confused','Sargeant_Saltnpepper','Coolshort_Bra','Matthew_High_Damage','Username_Copied','Tal_E_Whacker','Hakuna_Matata','Momsspaghetti','Themilkyweigh','Ilovedyourmom','Dosentanyonecare','Comical','Sinking_Swimmer','Desperate_Enuf','Abducted_By_Aliens','Twentyfourhourpharmacy','Shaquille_Oatmeal','Gleeful','Blueivysassistant','Igot_The_Juice','Joancrawfordfanclub','Nuggetz','Laugh_Till_U_Pee','Anita_Dick','Unfinished_Sentenc','Potatoxchipz','Elfishpresley','Quaratineinthesejeans','Dosentanyonecare','Ariana_Grandes_Ponytail','Icudeadnow','Im_Watching_You','Ghostfacegangsta','Behind_You','I_Love_My_Mommy','Buh-Buh-Bacon','Riot','Squishypoo','Do_Not_Leave_Me','Rollicking','Foxtrottangolove','Toastedbagelwithcreamcheese','Snax','Rueben_G_Spaut','Adistraction','Takenbywine','Heyyounotyouyou','Donworryitsgonbk','Average_Student','Bread_Pitt','Andy_Feltherbush','Anita_Dump','Bad_Karma','No_One_Cares','Tinfoilhat','Fluffycookie','Kiss-My-Axe','Supermagnificentextreme','Ufo_Believer','Abductedbyaliens','Countswagula','Wakeawake','Nothisispatrick','Casanova','Big_Mamas_House','Lactosetheintolerant','Op_Rah','Sleeping_Beauty','Tea_Baggins','Hoosier_Daddy','I_Can_See_Your_Pixels','Lively','Hugo_Balls','Dumbest_Man_Alive','A_Collection_Of_Cells','I_Killed_Cupid','Pig_Benis','Gut-Busting','Puppiesnkittens','Hotgirl_Bummer','Melonsmasher','King_F_Dairy_Queen','Imma_Rage_Quit','Couldnt_Find_Good_Name','Ashley_Said_What','Rawr_Means_Iloveyou','Peter_Pantz','Sofa_King_Cool','Witty','Kareem_O’Weet','Genzwarrior','Averagestudent','Rejectedbachelorcontestant','Entertaining','Pluralizes_Everythings','Watson_Herbusch','Audacity','Oprahwindfury','Maneatspants','My_Name_Is_In_Use','Gay','Google_Me_Now','Grangerdanger','Been_There_Done_That','Born-Confused','Ragingpuma','Horn_Of_Unicorn','Yes_U_Suck','Julius_Seizure','Ass_Ass_In','I_Dont_Dance','Harry_Johnson','Well_Endowed','Miya_Buttreaks','It’S_An__Unsolicited__Statement','Panini_Not_Meanie','Cherry-Picked','Blousesandhouses','Lt_Dans_Legs','Mandymooressingingvoice','Just-A-Harmless-Potato','Namenotimportant','Gawdofrofls','Ihavethingstodojpg','Amusing','In_Jail_Out_Soon','Notfunnyatall','Whos_Ur_Buddha','Becauseiliketolike','Unfriend_Now','Uproarious','Rambo_Was_Real','Manic_Pixie_Meme__Girl','Its_A_Political_Statement','Joan_Of_Arks_Angel','Ltdanslegs','Benafleckisanokactor','Cowabungadude','King_0f_Dairy_Queen','Macauliflower_Culkin','Fartinlutherking','Pixie_Dust','Yellowsnowman','Chop_Suey','Severus_Vape','Kokonuts','Tinfoil_Hat','Thanoslefthand','Hold-My-Beer','Hairy_Poppins','Mary_Juana','In_Jail_Out_Soon','Def_Not_An_Athelete','Yuri_Nator','Mangonificent','Lou_Briccant','Yellow_Snowman','Sargentsaltnpepa','Period_Blood','Mangogogo','Ahungrypolarbear','Idrinkchocolatemilk','Epic_Fail','Chalamet_My_Bae','Test_Name_Please_Ignore','Babushka','Baecon_Witheggs','Makunahatata','Theoldrazzledazzle','Nellsechs','Leo_Tarred','Ufo_Believer','Harmless_Potato','Oatmeal','Sargentsaltnpepa','Ask_Yo_Girl_About_Me','Nacho_Cheesefries','Joyous','Buzzed_Lightyear','Darklord','Iblamejordan','Dirtbag','Fresh_Out_The_Oven','Avocadorable','Reese_Witherfork','Sweetp','Raised_By_Wolves','A_Collection_Of_Cells','Down_With_The_Kids','Victimized_By_Regina','Morgan_Freemans_Voice','Bjuice','Babydoodles','Dildo_Swaggins','Joancrawfordfanclub','Wookiesrppl','Ariana_Grandes_Ponytail','Imma_Rage_Quit','Unfriendme','Couldnt_Find_Good_Name','ShaquilleOatmeal','Master_Chief','Better_Than_You','Uncommon_Name','Theotherharrypotter','Amicoolyet','Jacksparrow','Kentuckycriedfricken','Reverandtoast','Sold_Mom_For_Rp','Ihazquestion','Free_Hugz','Bigfoot_Is_Real','Spongebobs_Pineapple','Tiger_Queen','Bud_Lightyear','Joe_Not_Exotic','Cowgirl_Up','Avocadorable','Name_Not_Important','Iamyourdaddy','Shaquilleoatmeal','Rhoda_Hotte','Lowercase_Guy','Iyellalot','Badkarma','Lowercase_Guy','Frostedcupcake','Thetroublemakers','Strawberry_Pineapple','Early_Morning_Coffee','Frostedcupcake','Loliateyourcat','Hot_Name_Here','Robin_D_Craydle','Kim_Chi','Melonsmasher','Ima_Robot','Cuteasducks','Vye_Brator','Freddie_Not_The_Fish','Red_Monkey_Butt','Real_Name_Hidden','Theotherharrypotter','Bigfootisreal','Charlidamelioforpresident','Angelwonderland','Chin_Chillin','Catsordogs','Wellendowedpenguin','Ironmansnap','Juliusseizure','Omnipotentbeing','Sofa_King_Cool','Jolly'];
    /**
     * @var array $clients
     */
    private array $clients = [];

    /**
     * @var array $nicknames
     */
    private array $nicknames = [];

    /**
     * Handles new connections to the application.
     *
     * @param Connection $connection
     * @return void
     */
    public function onConnect(Connection $connection): void
    {
        $id = $connection->getClientId();
        $this->clients[$id] = $connection;
        $this->nicknames[$id] = $this->randomNames[rand(0, 501)];
    }

    /**
     * Handles client disconnects.
     *
     * @param Connection $connection
     * @return void
     */
    public function onDisconnect(Connection $connection): void
    {
        $id = $connection->getClientId();
        unset($this->clients[$id], $this->nicknames[$id]);
    }

    /**
     * Handles incomming data/requests.
     * If valid action is given the according method will be called.
     *
     * @param string $data
     * @param Connection $client
     * @return void
     */
    public function onData(string $data, Connection $client): void
    {
        try {
            $decodedData = $this->decodeData($data);

            // check if action is valid
            if ($decodedData['action'] !== 'echo') {
                return;
            }

            $message = $decodedData['data'] ?? '';
            if ($message === '') {
                return;
            }

            $clientId = $client->getClientId();
            $message = $this->nicknames[$clientId] . ': ' . $message;
            $this->actionEcho($message);
        } catch (\RuntimeException $e) {
            // @todo Handle/Log error
        }
    }

    /**
     * Handles data pushed into the websocket server using the push-client.
     *
     * @param array $data
     */
    public function onIPCData(array $data): void
    {
        $actionName = 'action' . ucfirst($data['action']);
        $message = 'System Message: ' . $data['data'] ?? '';
        if (method_exists($this, $actionName)) {
            call_user_func([$this, $actionName], $message);
        }
    }

    /**
     * Echoes data back to client(s).
     *
     * @param string $text
     * @return void
     */
    private function actionEcho(string $text): void
    {
        $encodedData = $this->encodeData('echo', $text);
        foreach ($this->clients as $sendto) {
            $sendto->send($encodedData);
        }
    }
}
