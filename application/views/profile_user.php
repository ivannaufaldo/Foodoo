<main class = "content-profile-user"> 
    <?php
    foreach($profile as $user)
    {
    ?>
    <div class = "row d-flex text-center justify-content-center">
        <h4 class = "header-account-profile">Account Profile</h4>
    </div>
    <div class = "row d-flex text-center">
        <div class = "background-image-profile">
            <img id = "image-profile" src = "<?php echo base_url('assets/Picture/'.$user['img'].'');?>"><br/><br />  
            <a class = "btn btn-primary" id = "change_picture" name = "change_picture" href = "<?php echo base_url('index.php/edit_profile/pageeditpicture/'.$user['username'].'')?>">Change Picture</a>
        </div> 
    </div>
    <div class = "row d-flex text-center justify-content-center">
        <form method = "post" action = "<?php echo base_url('index.php/edit_profile/UpdateProfile')?>"> 
            <div class = "form-group">
                <label class = "label-profile" for = "nama">Nama</label>
                <input type="hidden" class="form-control" name="id_pembeli" id="id_pembeli" value="<?php echo $user['id_pembeli']?>">
                <input class = "form-control" type = "text" id = "nama" name = "nama" value = "<?php echo $user['nama']?>">
            </div>
            <div class = "form-group">
                <label class = "label-profile" for = "no_telp">No.Telp</label>
                <input class = "form-control" type = "number" id = "no-telp" name = "no_telp" value = "<?php echo $user['no_telp']?>">
            </div>
            <div class = "form-group">
                <label class = "label-profile" for = "umur">Umur</label>
                <input class = "form-control" type = "text" id = "umur" name = "umur" value = "<?php echo $user['umur']?>">
            </div> 
            <div class = "form-group">
                <label class = "label-profile" for = "alamat">Alamat</label>
                <textarea class = "form-control" id = "alamat" name = "alamat" ><?php echo $user['alamat']?></textarea>
            </div><br />
            <button type = "Submit" class = "btn btn-primary" id = "submit-profile" name = "submit-profile" value = "submit">Save</button> 
        </form>
    </div>                       
    <?php
    }
    ?>
</main>