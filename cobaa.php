<?php
/*
* Kalkulator Sederhana Dengan PHP OOP
*/
class Matematika
{
  public $x;
  public $y;
  public $tb;
  public $bb;
  public $jk;

  public function bbi($x, $y, $bb, $tb)
  {
    $this->bb = $bb;
    $this->tb = $tb;
    $hasil = $this->bb / ($this->tb * $this->tb);
    return $hasil;
  }

  public function Tambah($x, $y, $bb, $tb)
  {
    $this->x = $x;
    $this->y = $y;
    $this->bb = $bb;
    $this->tb = $tb;
    $hasil = $this->x + $this->y + $this->bb + $this->tb;
    return $hasil;
  }

  public function Kali($x, $y, $bb, $tb)
  {
    $this->x = $x;
    $this->y = $y;
    $this->bb = $bb;
    $this->tb = $tb;
    $hasil = $this->x * $this->y * $this->bb * $this->tb;
    return $hasil;
  }

  public function Kurang($x, $y, $bb, $tb)
  {
    $this->x = $x;
    $this->y = $y;
    $this->bb = $bb;
    $this->tb = $tb;
    $hasil = $this->x - $this->y - $this->bb - $this->tb;
    return $hasil;
  }

  public function Bagi($x, $y,$bb, $tb)
  {
    $this->x = $x;
    $this->y = $y;
    $this->bb = $bb;
    $this->tb = $tb;
    $hasil = $this->x / $this->y / $this->bb / $this->tb;
    return $hasil;
  }

  public function TampilkanForm()
  {
    echo '<form method="POST">';
    echo '<tr>
            <td>Tinggi Badan</td>
            <td>:</td>
            <td><input type="text" name="tb"></td>
          </tr>
          <br>';
    echo '<tr>
            <td>Berat Badan</td>
            <td>:</td>
            <td><input type="text" name="bb"></td>
          </tr>
         <br>';
    echo '<tr>
            <td>Jenis Kelamin </td>
            <td>:</td>
            <td><input type="radio" name="jk" value="L">Laki-Laki</td>
            <td><input type="radio" name="jk" value="P">Perempuan</td>
          </tr>
          <br>';
    echo 'Berat Badan Ideal<input type="text" name="x"> &nbsp;';
    echo '<select name="operasi">
            <option value="tambah">+</option>
            <option value="kali">x</option>
            <option value="kurang">-</option>
            <option value="bagi">/</option>
          </select> &nbsp;';
    echo 'Berat Badan<input type="text" name="bb">;';
    echo '<select name="operasi">
            <option value="tambah">+</option>
            <option value="kali">x</option>
            <option value="kurang">-</option>
            <option value="bagi">/</option>
          </select> &nbsp;';
    echo '<input type="text" name="y"> &nbsp;';
    echo '<label>=</label> &nbsp;';
    echo '<input type="submit" value="Hitung">';
    echo '</form>';
  }
}

$data = new Matematika();
$data->TampilkanForm();

if ($_POST) {
  $x = $_POST['x'];
  $y = $_POST['y'];
  if ($_POST['operasi'] == "tambah") {
    echo "Hasil ".$x." + ".$y." = ".$data->Tambah($x, $y)."<br /><br />";
  } elseif ($_POST['operasi'] == "kali") {
    echo "Hasil ".$x." x ".$y." = ".$data->Kali($x, $y)."<br /><br />";
  } elseif ($_POST['operasi'] == "kurang") {
    echo "Hasil ".$x." - ".$y." = ".$data->Kurang($x, $y)."<br /><br />";
  } elseif ($_POST['operasi'] == "bagi") {
    echo "Hasil ".$x." / ".$y." = ".$data->Bagi($x, $y)."<br /><br />";
  }
}
?>