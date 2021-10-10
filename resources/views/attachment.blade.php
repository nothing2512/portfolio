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
                                Please input your email, we will send file to your email.
                            </h3>
                            <p>Notes: Check your spam folder if not received any email or search "admin@robet.my.id" on your email</p>
                        </div>
                    </div>
                    <div class="card-body px-lg-5">
                        <form role="form" method="POST" action="{{ route('attachment.download') }}">
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label" for="email">
                                    Email<sup class="text-danger">*</sup>
                                </label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email..." required>
                            </div>

                            <input type="hidden" name="dir" value="{{ $path }}" readonly>

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
