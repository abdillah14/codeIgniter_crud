<?= $this->extend('layouts/layout.php') ?>

<?= $this->section('content') ?>
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Students</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Students</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Student Record</h5>
                            <div class="col-md-9">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                                    Add Student
                                </button>
                        </div>
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                              
                                    <?php if($students): ?>
                                       <?php foreach($students as $row): ?>
                                        <tr>
                                       <td scope="row">1</td>
                                         <td><?php echo $row['nom'] ?></td>
                                         <td><?php echo $row['email'] ?></td>
                                         <td><?php echo $row['address'] ?></td>
                                         <td><?php echo $row['date'] ?></td>
                                     
                                         <td>
                                             <div class="row">
                                                 <a href="<?= base_url('student/delete/'.$row['id']) ?>" class="col"><i class="bi bi-trash-fill"></i></a>
                                                 <a href="<?= base_url('students/edit'.$row['id']) ?>" class="col"><i class="bi bi-pencil-square"></i></a>
                                             </div>
                                         </td>
                                         </tr>
                                        <?php endforeach; ?>
                                     <?php endif; ?> 
                               
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

<?= $this->include('students/modals/StudentModal.php') ?>
<?= $this->endSection() ?>