<<<<<<< HEAD
<?php
class Latihan1 extends CI_Controller
{
 public function index()
 {
 echo "Selamat Datang.. selamat belajar Web Programming";
 //$this->load->view('view-latihan1');
 }
 public function penjumlahan($n1, $n2)
 {
 $this->load->model('Model_latihan1');
 $hasil = $this->Model_latihan1->jumlah($n1, $n2);
 echo "Hasil Penjumlahan dari". $n1 ." + ". $n2 ." = "
.$hasil;
 }
=======
<?php
class Latihan1 extends CI_Controller
{
 public function index()
 {
 echo "Selamat Datang.. selamat belajar Web Programming";
 //$this->load->view('view-latihan1');
 }
 public function penjumlahan($n1, $n2)
 {
 $this->load->model('Model_latihan1');
 $hasil = $this->Model_latihan1->jumlah($n1, $n2);
 echo "Hasil Penjumlahan dari". $n1 ." + ". $n2 ." = "
.$hasil;
 }
>>>>>>> d05aec430d0531c085c76c1ea0285bad0476af72
}