<div class="modal fade" id="specialization-modal" tabindex="-1" role="dialog" aria-labelledby="modal-form"
     style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card bg-secondary border-0 mb-0">
                    <div class="card-header bg-transparent pt-3 pb-2">
                        <div class="text-muted text-center">
                            <h3 id="modal-title">Add Specialization</h3>
                        </div>
                    </div>
                    <div class="card-body px-lg-5">
                        <form role="form">

                            <div
                                id="icon"
                                class="dropzone dropzone-single mb-3 dz-size mx-auto"
                                data-toggle="dropzone"
                                data-dropzone-url="{{ route("attachment.upload") }}"
                                data-dropzone-mime="image/*"
                                data-dropzone-context="specialization">
                                <div class="fallback">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="projectCoverUploads">
                                        <label class="custom-file-label" for="projectCoverUploads">Choose file</label>
                                    </div>
                                </div>
                                <div class="dz-preview dz-preview-single">
                                    <div class="dz-preview-covers">
                                        <img class="dz-preview-img dz-size" src="#" alt="..." data-dz-thumbnail>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label" for="title">Title</label>
                                <input type="text" name="title" class="form-control" id="title">
                            </div>

                            <div class="form-group">
                                <label class="form-control-label" for="description">Description</label>
                                <textarea class="form-control" rows="5" id="description" name="description"></textarea>
                            </div>

                            <div class="text-center">
                                <button id="btSubmit" type="button" class="btn btn-primary my-4">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
