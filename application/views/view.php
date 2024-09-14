<?php $this->load->view('templates/header'); ?>


<main class="row vh-100 mx-5">
    <div class="col h-25 w-50 justify-content-center align-items-center border border-black">
        <form action="create" method="post">
            <label for="firstname">Firstname</label>
            <input type="text" name="firstname" placeholder="Enter your Firstname"><br>
            <label for="lastname">Lastname</label>
            <input type="text" name="lastname" placeholder="Enter your Lastname"><br>
            <label for="course">Course</label>
            <input type="text" name="course" placeholder="Enter your Course"><br>
            <label for="studentno">Student Number</label>
            <input type="text" name="studentno" placeholder="Enter your Student Number"><br>
            <input type="submit" name="Create" value="Submit">
        </form>
    </div>
</main>

<?php $this->load->view('templates/footer'); ?>