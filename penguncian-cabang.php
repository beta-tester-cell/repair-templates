<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Keuangan</a>
        <a href="penguncian-cabang.php">Penguncian Cabang</a>
    </div>
</div>
<div class="content">
    <div class="container">
        <div class="py-1">
            <div class="card">
                <div class="d-flex flex-start">
                    <button class="btn btn-link modal-button text-primary" data-toggle="modal" data-target="#formPenguncianCabang">
                        <span><i class="fa fa-plus"></i> ADD NEW MODUL CABANG</span>
                    </button>
                    <a href="penguncian-cabang.php" class="btn btn-link">
                        <span><i class="far fa-list-alt"></i> LIST AKSES MODUL CABANG</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="py-1">
            <div class="card">
                <div class="card-header mb-2">
                    <div class=" d-flex flex-space-between flex-change">
                        <h6>Akses Modul Cabang Management</h6>

                        <div class="filtering-export">
                            <div class="filtering-units">
                                <label>Unit :</label>
                                <select name="unit" id="unit">
                                    <option value="0">-- Pilih Unit --</option>
                                    <option value="1">Politeknik LP3I Jakarta</option>
                                    <option value="2">Politeknik LP3I Bandung</option>
                                    <option value="3">Politeknik LP3I Medan</option>
                                    <option value="4">Polinas</option>
                                </select>
                            </div>
                            <div class="select-export">
                                <div type="button" class="btn btn-link btn-secondary dropdown-button"><i class="fas fa-file-export"></i> Export</div>

                                <div class="type-export">
                                    <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                                    <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                                    <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table id="datatable" class="table-list">
                        <thead>
                            <tr>
                                <th>Unit</th>
                                <th class="text-center">Marketing</th>
                                <th class="text-center">Keuangan</th>
                                <th class="text-center"> Akademik</th>
                                <th class="text-center">C&P</th>
                                <th class="text-center">HR</th>
                                <th class="text-center">All</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Kramat Raya</td>
                                <td>
                                    <label class="checkbox">
                                        <input type="checkbox" value="1">
                                        <span class="checkmark checkmark-left-43"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="checkbox">
                                        <input type="checkbox" value="2">
                                        <span class="checkmark checkmark-left-43"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="checkbox">
                                        <input type="checkbox" value="3">
                                        <span class="checkmark checkmark-left-45"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="checkbox">
                                        <input type="checkbox" value="4">
                                        <span class="checkmark  checkmark-left-33"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="checkbox">
                                        <input type="checkbox" value="5">
                                        <span class="checkmark  checkmark-left-33"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="checkbox">
                                        <input type="checkbox" value="5">
                                        <span class="checkmark checkmark-left-33"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="text-secondary"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="text-danger"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Pasar Minggu</td>
                                <td>
                                    <label class="checkbox">
                                        <input type="checkbox" value="1">
                                        <span class="checkmark checkmark-left-43"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="checkbox">
                                        <input type="checkbox" value="2">
                                        <span class="checkmark checkmark-left-43"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="checkbox">
                                        <input type="checkbox" value="3">
                                        <span class="checkmark checkmark-left-45"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="checkbox">
                                        <input type="checkbox" value="4">
                                        <span class="checkmark  checkmark-left-33"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="checkbox">
                                        <input type="checkbox" value="5">
                                        <span class="checkmark  checkmark-left-33"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="checkbox">
                                        <input type="checkbox" value="5">
                                        <span class="checkmark checkmark-left-33"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="text-secondary"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="text-danger"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Bekasi</td>
                                <td>
                                    <label class="checkbox">
                                        <input type="checkbox" value="1">
                                        <span class="checkmark checkmark-left-43"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="checkbox">
                                        <input type="checkbox" value="2">
                                        <span class="checkmark checkmark-left-43"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="checkbox">
                                        <input type="checkbox" value="3">
                                        <span class="checkmark checkmark-left-45"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="checkbox">
                                        <input type="checkbox" value="4">
                                        <span class="checkmark  checkmark-left-33"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="checkbox">
                                        <input type="checkbox" value="5">
                                        <span class="checkmark  checkmark-left-33"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="checkbox">
                                        <input type="checkbox" value="5">
                                        <span class="checkmark checkmark-left-33"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="text-secondary"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="text-danger"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Cimone Tanggerang</td>
                                <td>
                                    <label class="checkbox">
                                        <input type="checkbox" value="1">
                                        <span class="checkmark checkmark-left-43"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="checkbox">
                                        <input type="checkbox" value="2">
                                        <span class="checkmark checkmark-left-43"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="checkbox">
                                        <input type="checkbox" value="3">
                                        <span class="checkmark checkmark-left-45"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="checkbox">
                                        <input type="checkbox" value="4">
                                        <span class="checkmark  checkmark-left-33"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="checkbox">
                                        <input type="checkbox" value="5">
                                        <span class="checkmark  checkmark-left-33"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="checkbox">
                                        <input type="checkbox" value="5">
                                        <span class="checkmark checkmark-left-33"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="text-secondary"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="text-danger"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Jakarta Utara</td>
                                <td>
                                    <label class="checkbox">
                                        <input type="checkbox" value="1">
                                        <span class="checkmark checkmark-left-43"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="checkbox">
                                        <input type="checkbox" value="2">
                                        <span class="checkmark checkmark-left-43"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="checkbox">
                                        <input type="checkbox" value="3">
                                        <span class="checkmark checkmark-left-45"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="checkbox">
                                        <input type="checkbox" value="4">
                                        <span class="checkmark  checkmark-left-33"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="checkbox">
                                        <input type="checkbox" value="5">
                                        <span class="checkmark  checkmark-left-33"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="checkbox">
                                        <input type="checkbox" value="5">
                                        <span class="checkmark checkmark-left-33"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="text-secondary"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="text-danger"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Cilodong Raya</td>
                                <td>
                                    <label class="checkbox">
                                        <input type="checkbox" value="1">
                                        <span class="checkmark checkmark-left-43"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="checkbox">
                                        <input type="checkbox" value="2">
                                        <span class="checkmark checkmark-left-43"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="checkbox">
                                        <input type="checkbox" value="3">
                                        <span class="checkmark checkmark-left-45"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="checkbox">
                                        <input type="checkbox" value="4">
                                        <span class="checkmark  checkmark-left-33"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="checkbox">
                                        <input type="checkbox" value="5">
                                        <span class="checkmark  checkmark-left-33"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="checkbox">
                                        <input type="checkbox" value="5">
                                        <span class="checkmark checkmark-left-33"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="text-secondary"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="text-danger"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- form modal -->

                <div class="modal" id="formPenguncianCabang" tabindex="-1" aria-labelledby="formPenguncianCabangLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fit-custom">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="formPenguncianCabangLabel">Konfigurasi Akses Modul Aplikasi Cabang</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form>
                                <div class="modal-body">

                                    <div class="form-inputs">
                                        <label>Kampus</label>
                                        <select name="kampus" id="kampus">
                                            <option value="0">-- Pilih Kampus --</option>
                                            <option value="1">Kramat Raya</option>
                                            <option value="2">Pasar Minggu</option>
                                            <option value="3">Bekasi</option>
                                            <option value="4">Cimone Tanggerang</option>
                                            <option value="5">Jakarta Utara</option>
                                            <option value="6">Cilodong Raya</option>
                                        </select>
                                    </div>
                                    <div class="form-inputs form-checking">
                                        <label>All</label>
                                        <label class="checkbox">
                                            <input type="checkbox" name="all" value="5">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-inputs form-checking">
                                        <label>Marketing</label>
                                        <label class="checkbox">
                                            <input type="checkbox" name="all" value="5">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-inputs form-checking">
                                        <label>Keuangan</label>
                                        <label class="checkbox">
                                            <input type="checkbox" name="all" value="5">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-inputs form-checking">
                                        <label>Akademik</label>
                                        <label class="checkbox">
                                            <input type="checkbox" name="all" value="5">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-inputs form-checking">
                                        <label>C&P</label>
                                        <label class="checkbox">
                                            <input type="checkbox" name="all" value="5">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-inputs form-checking">
                                        <label>HR</label>
                                        <label class="checkbox">
                                            <input type="checkbox" name="all" value="5">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>



                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php include('footer-datatable.php') ?>