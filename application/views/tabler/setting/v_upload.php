<div class="container-fluid">
          <!-- Page title -->
          <div class="page-header d-print-none">
            <div class="row align-items-center">
              <div class="col">
                <h2 class="page-title">
                  Dokumen Baru
                </h2>
              </div>
              <!-- Page title actions -->
            </div>
          </div>
        </div>
        <div class="page-body">
          <div class="container-fluid">
            <!-- Content here -->
            <div class="row row-cards">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Upload Dokumen</h3>
                  </div>
                  <div class="card-body">
                    <form id="form-new-dokumen">
                      <div class="form-group mb-3 row">
                        <label class="form-label col-3 col-form-label" id="label-nomor">File Dokumen</label>
                        <div class="col">
                          <input type="file" class="form-control" aria-describedby="File Dokumen" id='sel-file'>
                          <div class="invalid-feedback mb-0" id="iv-sel-file"></div>
                        </div>
                      </div>

                      <div class="form-footer">
                        <button type="submit" class="btn btn-primary">Upload Dokumen</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>



        </div>

        <!-- MODAL SUCCESS green-->
        <div class="modal modal-blur fade" id="modal-success" tabindex="-1" style="display: none;" aria-hidden="true">
          <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              <div class="modal-status bg-success"></div>
              <div class="modal-body text-center py-4">
                <!-- Download SVG icon from http://tabler-icons.io/i/circle-check -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-success icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <circle cx="12" cy="12" r="9" />
                  <path d="M9 12l2 2l4 -4" />
                </svg>
                <h3>Update Selesai</h3>
                <div class="text-muted" id="modal-success-info">...</div>
              </div>
              <div class="modal-footer">
                <div class="w-100">
                  <div class="row">
                    <div class="col"><a href="#" class="btn w-100" data-bs-dismiss="modal">
                        Tutup
                      </a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>