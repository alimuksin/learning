        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li>
                        <a href="<?= base_url('auth/login') ;?>" aria-expanded="false">
                            <i class="icon-home menu-icon"></i><span class="nav-text">Home</span>
                        </a>
                    </li>
                    
                    <?php
                        if($this->session->userdata('id_role') == '1'){ // Jika role-nya admin
                    ?>
                    <li class="nav-label">Menu Master</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-screen-desktop menu-icon"></i><span class="nav-text">Master Akademik</span>
                        </a>
                        <ul aria-expanded="false">
                           <li><a href="<?= base_url('admin/kelas') ;?>" aria-expanded="false">Kelas</a></li>
                            <li><a href="<?= base_url('admin/mapel') ;?>" aria-expanded="false">Mapel</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="<?= base_url('admin/siswa') ;?>" aria-expanded="false">
                            <i class="icon-user menu-icon"></i><span class="nav-text">Data Siswa</span>
                        </a>
                    </li>

                    <li class="nav-label">Menu Administrator</li>
                    <li>
                        <a href="<?= base_url('admin/user') ;?>" aria-expanded="false">
                            <i class="icon-user menu-icon"></i><span class="nav-text">Pengguna</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-settings menu-icon"></i><span class="nav-text">Pengaturan</span>
                        </a>
                        <ul aria-expanded="false">
                           <li><a href="<?= base_url('admin/set/web') ;?>" aria-expanded="false">Website</a></li>
                            <li><a href="<?= base_url('admin/set/tampilan') ;?>" aria-expanded="false">Tampilan</a></li>
                            <li><a href="<?= base_url('admin/aksesmenu') ;?>" aria-expanded="false">Tampilan</a></li>
                        </ul>
                    </li>
                <?php } ?>
                    
                </ul>
            </div>
        </div>