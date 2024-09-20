<?php $this->load->view('templates/header'); ?>


<main class="vh-100 mx-5 row justify-content-center align-items-center">
    <div class="w-25 border border-red p-3 rounded text-center" style="height: 57%;">
        <h1 class="h5 mb-2">UPDATE USER HERE</h1>
        <form action="<?= base_url() ?>usercontroller/updateStudent/<?= $id ?>" method="post">
            <label for="firstname" class="form-label fw-bold fs-5">FIRSTNAME</label>
            <input type="text" name="firstname" placeholder="Enter your Firstname" class="form-control" value="<?= $student->std_first_name ?>"><br>
            <label for="lastname" class="form-label fw-bold fs-5">LASTNAME</label>
            <input type="text" name="lastname" placeholder="Enter your Lastname" class="form-control" value="<?= $student->std_last_name ?>"><br>
            <label for="course" class="form-label fw-bold fs-5">COURSE</label>
            <input type="text" name="course" placeholder="Enter your Course" class="form-control" value="<?= $student->std_course ?>"><br>
            <label for="studentno" class="form-label fw-bold fs-5">STUDENT NUMBER</label>
            <input type="text" name="studentno" placeholder="Enter your Student Number" class="form-control" value="<?= $student->std_no ?>"><br>
            <div class="d-grid mt-4">
                <input type="submit" name="Create" value="Submit" class="btn btn-dark btn-lg">
            </div>
        </form>
        <?php if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-info d-grid">
                <h1>Successfully Updated!</h1>
            </div>
        <?php } ?>
        <?php if ($this->session->flashdata('error')) { ?>
            <div class="alert alert-danger d-grid">
                <h1>FAILED!</h1>
            </div>
        <?php } ?>
    </div>
</main>

<?php $this->load->view('templates/footer'); ?>