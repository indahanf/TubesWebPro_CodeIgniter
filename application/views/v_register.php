<?php
$this->load->view('head');
//isi dengan meload view header

?>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <?php $atribut = array(
                'class' => 'login100-form validate-form p-l-55 p-r-55 p-t-178'
            );?>
            <?php
            echo form_open("c_akun/daftar_akun",$atribut);
//            isi dengan form_open ke controller Akun_C dengan method daftar_akun
            echo "<center>".$this->session->flashdata('info')."</center><br>";
            ?>
                    <span class="login100-form-title">
                        Daftar
                    </span>
                <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter nama">
                    <input class="input100" type="text" required name="nama" placeholder="Nama">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                    <input class="input100" type="text" required name="username" placeholder="Username">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email">
                    <input class="input100" type="text" required name="email" placeholder="Email">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Please enter password">
                    <input class="input100" type="password" required name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter alamat">
                    <input class="input100" type="text" required name="alamat" placeholder="Alamat">
                    <span class="focus-input100"></span>
                </div>

                <br>
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Daftar
                    </button>
                </div>

                <div class="flex-col-c p-t-170 p-b-40">
                        <span class="txt1 p-b-9">
                            Punya Akun?
                        </span>

                    <a href="<?php echo site_url('c_akun/index') ?>" class="txt3">
                        Login Langsung
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
//disini load view footer
$this->load->view('footer'); ?>