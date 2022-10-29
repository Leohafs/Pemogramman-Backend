<?php
class Animal
{
    //property...
    public $animals;

    //construtor...
    public function __construct($animals = array())
    {
        $this->animals = $animals;
    }
    //menampilkan...
    public function index()
    {
        foreach ($this->animals as $anml) {
            echo '-' . $anml . '<br>';
        }
    }
    //menambah...
    public function store($tambah)
    {
        array_push($this->animals, $tambah);
    }
    //mengupdate...
    public function update($index, $data)
    {
        $this->animals[$index] = $data;
    }
    //mmenghapus...
    public function destory($index)
    {
        unset($this->animals[$index]);
    }
}

$animal = new Animal(['Ayam', 'Ikan', "Kelinci"]);

echo 'index - menampilkan seluruh hewan : <br>';
echo $animal->index();
echo '<br>';

echo 'store - menambahkan hewan baru (Burung) :<br>';
echo $animal->store('Burung');
echo $animal->index();
echo '<br>';

echo "Update - Mengupdate hewan : <br>";
$animal->update(0, 'Kucing Anggora');
$animal->index();
echo "<br>";

echo 'destory - menghapus hewan :<br>';
echo $animal->destory(1);
echo $animal->index();
echo '<br>';
