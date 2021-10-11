<!DOCTYPE html>
<html lang="en">
@include("components.main.head")

<body>
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modal-form"
     style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card bg-secondary border-0 mb-0">
                    <div class="card-header bg-transparent pt-3 pb-2">
                        <div class="text-muted text-center">
                            <h3 id="modal-title">
                                Masukkan alamat email anda.
                            </h3>
                            <p>Notes: Jika email belum terkirim setelah 5 menit, cek folder spam, atau bisa kontak: <a href="mailto:mail@robet.my.id"></a></p>
                        </div>
                    </div>
                    <div class="card-body px-lg-5">
                        <form role="form" method="POST" action="{{ route('attachment.download') }}">
                            @csrf

                            <div class="form-group">
                                <label class="form-control-label" for="filename">
                                    Filename<sup class="text-danger">*</sup>
                                </label>
                                <input type="text" name="filename" class="form-control" id="filename" value="{{ $filename }}" disabled readonly>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label" for="name">
                                    Name<sup class="text-danger">*</sup>
                                </label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Name..." required>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label" for="email">
                                    Email<sup class="text-danger">*</sup>
                                </label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email..." required>
                            </div>

                            <input type="hidden" name="id" value="{{ $id }}" readonly>

                            <div class="text-center">
                                <button id="btSubmit" type="submit" class="btn btn-primary my-4">Send File</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include("components.main.scripts")
<script type="application/javascript">
    const modal = $("#modal");
    modal.on('hidden.bs.modal', function () {
        modal.modal('show');
    })
    modal.modal('show');
</script>
</body>
</html>
