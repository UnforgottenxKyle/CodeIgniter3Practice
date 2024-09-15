<?php $this->load->view('templates/header'); ?>


<main class="container-fluid vh-100% row justify-content-center align-items-center">
    <div class="w-75 border border-black text-center" style="height: 57%;">
        <form action="<?= base_url() ?>usercontroller/login" method="post">
            <label class="form-label h4">FIRSTNAME</label>
            <input type="text" name="firstname" placeholder="Enter your firstname" class="form-control"><br>
            <label class="form-label h4">LASTNAME</label>
            <input type="text" name="firstname" placeholder="Enter your lastname" class="form-control"><br>
            <div class="d-grid">
                <input type="submit" value="LOGIN" name="login" class="btn btn-primary">
            </div>
        </form>
    </div>
</main>

<?php $this->load->view('templates/footer'); ?>