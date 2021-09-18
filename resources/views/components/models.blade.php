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
        project: {
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
