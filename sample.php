<?php
$sample = "Hello!";
echo $sample;
?>

<?php
$age = 20;
$test ="テスト"
?>

<?php
$array = [1,2,3];
echo $array[0];
echo $array[2];
?>

<?php
$nizi = [
    ['松下',29,'男性'],
    ['高田',25,'男性'],
    ['岡田',25,'女性']
];

$ren = [
    'name'=>'田中',
    'age'=>24,
    'codelang'=>'HTML'
];
echo"私の名前は{$nizi[0][0]}です。年齢は{$nizi[0][1]}歳{$nizi[0][2]}です。"."\n";
echo $ren['name'];
?>

<?php
$i = 0;
echo $i;
echo $i++;
echo $i;
echo ++$i;
?>

<?php
for($i =0;$i<4;$i++){
    echo 3;
}
?>

<?php
for($i =0; $i<15; $i++){
    if($i % 2 ===0){
        continue;
    }
    if($i >13){
        break;
    }
    echo $i."\n";
}
?>

<?php
class Company{
    protected $name;
    protected $address;
    protected $tel;

    public function __construct($name,$address,$tel){
        $this->name =$name;
        $this->address =$address;
        $this->tel =$tel;
    }

    public function displayCompany(){
        echo "会社名:{$this->name}\n";
        echo "住所:{$this->address}\n";
        echo "電話番号:{$this->tel}\n";
    }
}
class Department extends Company{
    private $deptName;
    private $manager;

    public function __construct($name,$address,$tel,$deptName,$manager){
        parent::__construct($name,$address,$tel);
        $this->deptName =$deptName;
        $this->manager =$manager;
    }

    public function displayDepartment(){
        echo "部署名:{$this->deptName}\n";
        echo "部長:{$this->manager}\n";
    }
}

$a = new Department("サンプルA","市ヶ谷","080-xxxx-xxxx","人事","高田");
$b = new Department("サンプルB","池袋","090-xxxx-xxxx","総務","田中");
$c = new Department("サンプルC","新宿","070-xxxx-xxxx","営業","高橋");

$list = [$a,$b,$c];

foreach($list as $company){
    $company->displayCompany();
    $company->displayDepartment();
    echo "\n";
}
?>