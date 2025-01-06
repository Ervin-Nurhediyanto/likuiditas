@php
  $data_consumer = [
    (object) ['id' => 0, 'name' => 'Toni'],
    (object) ['id' => 1, 'name' => 'Joko']
  ];
  $data_payment_method = [
    (object) ['id' => 0, 'name' => 'KPR'],
    (object) ['id' => 1, 'name' => 'Cash']
  ];
  $data_unit_bisnis = [
    (object) ['id' => 0, 'name' => 'SAMARA GRAHA'],
    (object) ['id' => 1, 'name' => 'SAMARA GRIYA'],
    (object) ['id' => 2, 'name' => 'SAPPHIRE GRAHA'],
    (object) ['id' => 3, 'name' => 'SAPPHIRE GRIYA'],
    (object) ['id' => 4, 'name' => 'SAPPHIRE GRIYA MODERN']
  ];
  $data_project = [
    (object) ['id' => 0, 'name' => 'Boutique Tanjung'],
    (object) ['id' => 1, 'name' => 'Madani I'],
    (object) ['id' => 2, 'name' => 'Residence Tegal III'],
    (object) ['id' => 3, 'name' => 'Town House Purbalingga']
  ];
  $data_Block = [
    (object) ['id' => 0, 'name' => 'D16R'],
  ];
  $data_profiling = [
    (object) ['id' => 0, 'name' => 'Lanjut'],
    (object) ['id' => 1, 'name' => 'Tidak Lanjut'],
  ];
@endphp

<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>New Data</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="card card-default">
        <x-content.sg.likuiditas.form.base.header/>
        <div class="card-body">
          <div class="row">
            <form action="{{ route('likuit.store') }}" method="POST" enctype="multipart/form-data"  class="col-12">
              @csrf
              <div class="row p-0 m-0">
                <div class="col-md-4">
                  {{-- <x-content.sg.likuiditas.form.base.input :label="'consumer_name'" :title="'Nama Konsumen'"/> --}}
                  {{-- <x-content.sg.likuiditas.form.base.input-file/> --}}
                  {{-- <x-content.sg.likuiditas.form.base.date-picker :label="'dob'" :title="'Tanggal Lahir'"/> --}}
                  <x-content.sg.likuiditas.form.base.option-minimal :label="'consumer_name'" :title="'Nama Konsumen'" :options="$data_consumer"/>
                  <x-content.sg.likuiditas.form.base.input :label="'id_number'" :title="'NIK'"/>
                  <x-content.sg.likuiditas.form.base.input :label="'phone'" :title="'No HP'"/>
                  <x-content.sg.likuiditas.form.base.option-minimal :label="'unit_bisnis'" :title="'Region'" :options="$data_unit_bisnis"/>
                  <x-content.sg.likuiditas.form.base.option-minimal :label="'project'" :title="'Proyek'" :options="$data_project"/>
                  <x-content.sg.likuiditas.form.base.option-minimal :label="'block'" :title="'Block'" :options="$data_Block"/>
                </div>

                <div class="col-md-4">
                  <x-content.sg.likuiditas.form.base.input :label="'price'" :title="'Harga'"/>
                  <x-content.sg.likuiditas.form.base.input :label="'booking'" :title="'Booking'"/>
                  <x-content.sg.likuiditas.form.base.option-minimal :label="'payment_method'" :title="'Metode Pembayaran'" :options="$data_payment_method"/>
                  <x-content.sg.likuiditas.form.base.input :label="'bank'" :title="'Bank'"/>
                  <x-content.sg.likuiditas.form.base.input :label="'plafond'" :title="'Plafond Pengajuan KPR'"/>
                  <div class="mb-3">
                    <label>Dokumen KPR</label>
                    <div class="row">
                      <x-content.sg.likuiditas.form.base.checkbox :label="'ktp'" :title="'KTP'"/>
                      <x-content.sg.likuiditas.form.base.checkbox :label="'kk'" :title="'KK'"/>
                    </div>
                  </div>     
                </div>

                <div class="col-md-4">
                  <x-content.sg.likuiditas.form.base.input :label="'um_nominal'" :title="'Nominal UM'"/>
                  <x-content.sg.likuiditas.form.base.date-picker :label="'dp'" :title="'Tanggal Pembayaran UM'"/>
                  <x-content.sg.likuiditas.form.base.option-minimal :label="'profiling_result'" :title="'Hasil Profiling'" :options="$data_profiling"/>
                  <x-content.sg.likuiditas.form.base.date-picker :label="'dbob'" :title="'Tanggal BOB'"/>
                  <x-content.sg.likuiditas.form.base.date-picker :label="'dsppk'" :title="'Tanggal SPPK'"/>
                  <x-content.sg.likuiditas.form.base.date-picker :label="'da'" :title="'Tanggal Akad'"/>
                </div>

              </div>
              <div class="col-1 d-flex justify-content-center">
                <button type="submit" class="w-100 btn btn-md btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
        {{-- <x-content.sg.likuiditas.form.base.footer/> --}}
      </div>

      {{-- <div class="row">
        <div class="col-md-6">
          <x-content.sg.likuiditas.form.base.template.date-picker/>
          <x-content.sg.likuiditas.form.base.template.icheck/>
        </div>
        <!-- /.col (right) -->
      </div> --}}
      
      {{-- <div class="row">
        <div class="col-md-12">
          <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">bs-stepper</h3>
            </div>
            <div class="card-body p-0">
              <div class="bs-stepper">
                <div class="bs-stepper-header" role="tablist">
                  <!-- your steps here -->
                  <div class="step" data-target="#logins-part">
                    <button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger">
                      <span class="bs-stepper-circle">1</span>
                      <span class="bs-stepper-label">Logins</span>
                    </button>
                  </div>
                  <div class="line"></div>
                  <div class="step" data-target="#information-part">
                    <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                      <span class="bs-stepper-circle">2</span>
                      <span class="bs-stepper-label">Various information</span>
                    </button>
                  </div>
                </div>
                <div class="bs-stepper-content">
                  <!-- your steps content here -->
                  <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                  </div>
                  <div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                    <div class="form-group">
                      <label for="exampleInputFile">File input</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div>
                      </div>
                    </div>
                    <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              Visit <a href="https://github.com/Johann-S/bs-stepper/#how-to-use-it">bs-stepper documentation</a> for more examples and information about the plugin.
            </div>
          </div>
          <!-- /.card -->
        </div>
      </div> --}}
      
      {{-- <div class="row">
        <div class="col-md-12">
          <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">Dropzone.js <small><em>jQuery File Upload</em> like look</small></h3>
            </div>
            <div class="card-body">
              <div id="actions" class="row">
                <div class="col-lg-6">
                  <div class="btn-group w-100">
                    <span class="btn btn-success col fileinput-button">
                      <i class="fas fa-plus"></i>
                      <span>Add files</span>
                    </span>
                    <button type="submit" class="btn btn-primary col start">
                      <i class="fas fa-upload"></i>
                      <span>Start upload</span>
                    </button>
                    <button type="reset" class="btn btn-warning col cancel">
                      <i class="fas fa-times-circle"></i>
                      <span>Cancel upload</span>
                    </button>
                  </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center">
                  <div class="fileupload-process w-100">
                    <div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                      <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="table table-striped files" id="previews">
                <div id="template" class="row mt-2">
                  <div class="col-auto">
                      <span class="preview"><img src="data:," alt="" data-dz-thumbnail /></span>
                  </div>
                  <div class="col d-flex align-items-center">
                      <p class="mb-0">
                        <span class="lead" data-dz-name></span>
                        (<span data-dz-size></span>)
                      </p>
                      <strong class="error text-danger" data-dz-errormessage></strong>
                  </div>
                  <div class="col-4 d-flex align-items-center">
                      <div class="progress progress-striped active w-100" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                        <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                      </div>
                  </div>
                  <div class="col-auto d-flex align-items-center">
                    <div class="btn-group">
                      <button class="btn btn-primary start">
                        <i class="fas fa-upload"></i>
                        <span>Start</span>
                      </button>
                      <button data-dz-remove class="btn btn-warning cancel">
                        <i class="fas fa-times-circle"></i>
                        <span>Cancel</span>
                      </button>
                      <button data-dz-remove class="btn btn-danger delete">
                        <i class="fas fa-trash"></i>
                        <span>Delete</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              Visit <a href="https://www.dropzonejs.com">dropzone.js documentation</a> for more examples and information about the plugin.
            </div>
          </div>
          <!-- /.card -->
        </div>
      </div> --}}
      
    </div>
  </section>
</div>