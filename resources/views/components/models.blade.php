<script type="application/javascript">
    const services = {
        skill: {
            delete: function (id, success, fail) {
                const mainUrl = '{{ route("skill.store") }}'
                $.post(`${mainUrl}/${id}/delete`, {
                    _token: '{{ csrf_token() }}'
                }, function (response) {
                    success(response)
                }).fail(function () { fail() });
            },
            edit: function (id, value, success, fail) {
                const mainUrl = '{{ route("skill.store") }}'
                $.post(`${mainUrl}/${id}`, {
                    value: value,
                    _token: '{{ csrf_token() }}'
                }, function (response) {
                    success(response)
                }).fail(function () { fail() });
            },
            store: function (name, success, fail) {
                $.post('{{ route("skill.store") }}', {
                    name: name,
                    _token: '{{ csrf_token() }}'
                }, function (response) {
                    success(response)
                }).fail(function () { fail() });
            }
        },
        specialization: {
            delete: function (id, success, fail) {
                const mainUrl = '{{ route("specialization.store") }}'
                $.post(`${mainUrl}/${id}/delete`, {
                    _token: '{{ csrf_token() }}'
                }, function (response) {
                    success(response)
                }).fail(function () { fail() });
            },
            edit: function (id, title, description, icon, success, fail) {
                const mainUrl = '{{ route("specialization.store") }}'
                $.post(`${mainUrl}/${id}`, {
                    title: title,
                    description: description,
                    icon: icon,
                    _token: '{{ csrf_token() }}'
                }, function (response) {
                    success(response)
                }).fail(function () { fail() });
            },
            store: function (title, description, icon, success, fail) {
                $.post('{{ route("specialization.store") }}', {
                    title: title,
                    description: description,
                    icon: icon,
                    _token: '{{ csrf_token() }}'
                }, function (response) {
                    success(response)
                }).fail(function () { fail() });
            }
        },
        project: {
            delete: function (id, success, fail) {
                const mainUrl = '{{ route("project.store") }}'
                $.post(`${mainUrl}/${id}/delete`, {
                    _token: '{{ csrf_token() }}'
                }, function (response) {
                    success(response)
                }).fail(function () { fail() });
            },
            edit: function (id, title, description, link, image, success, fail) {
                const mainUrl = '{{ route("project.store") }}'
                $.post(`${mainUrl}/${id}`, {
                    title: title,
                    description: description,
                    link: link,
                    image: image,
                    _token: '{{ csrf_token() }}'
                }, function (response) {
                    success(response)
                }).fail(function () { fail() });
            },
            store: function (title, description, link, image, success, fail) {
                $.post('{{ route("project.store") }}', {
                    title: title,
                    description: description,
                    link: link,
                    image: image,
                    _token: '{{ csrf_token() }}'
                }, function (response) {
                    success(response)
                }).fail(function () { fail() });
            }
        },
        profile: {
            delete: function (id, success, fail) {
                const mainUrl = '{{ route("skill.store") }}'
                $.post(`${mainUrl}/${id}/delete`, {
                    _token: '{{ csrf_token() }}'
                }, function (response) {
                    success(response)
                }).fail(function () { fail() });
            },
            edit: function (id, value, success, fail) {
                const mainUrl = '{{ route("skill.store") }}'
                $.post(`${mainUrl}/${id}`, {
                    value: value,
                    _token: '{{ csrf_token() }}'
                }, function (response) {
                    success(response)
                }).fail(function () { fail() });
            },
            store: function (name, success, fail) {
                $.post('{{ route("skill.store") }}', {
                    name: name,
                    _token: '{{ csrf_token() }}'
                }, function (response) {
                    success(response)
                }).fail(function () { fail() });
            }
        },
    }

</script>
