<?php $this->load->view('templates/header'); ?>


<main class="container-fluid vh-100% row justify-content-center align-items-center ">
    <div class="w-75 border border-black text-center" style="height: 57%; margin-bottom: 100px;">
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

    <table class="w-50 table table-bordered table-hover table-stripped">
        <tbody>
            <tr>
                <td>ID</td>
                <td>FIRSTNAME</td>
                <td>LASTNAME</td>
                <td>COURSE</td>
                <td>STUDENT NUMBER</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</main>

<?php $this->load->view('templates/footer'); ?>