<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/form.css">
    <title>Edit Post</title>
</head>

<body>

    <div class="form_container">
        <div class="main_form">
            <!-- resources/views/component/edit.blade.php -->

            <form id="editPostForm" action="{{ url('/update/' . $cloth->id) }}" method="post" class="form_contain"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="closer" onclick="toggleEditForm()">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <h2 class="post">Edit post</h2>
                <div class="form_padder">
                    <div class="input_sub_sections">
                        <label for="name">Name</label>
                        <div class="input_container">
                            <input type="text" required name="name" value="{{ $cloth->name }}" />
                        </div>
                    </div>
                    <div class="input_sub_sections">
                        <label for="description">Description</label>
                        <div class="input_container">
                            <textarea name="description" required id="" cols="30" rows="10">{{ $cloth->description }}</textarea>
                        </div>
                    </div>
                    <div class="input_sub_sections">
                        <label for="image">Image</label>
                        <div class="input_container">
                            <input type="file" name="image" />
                        </div>
                    </div>
                    <div class="form_btn">
                        <button type="submit">Update</button>
                    </div>
                </div>
            </form>



        </div>
    </div>


</body>
<script>
    function toggleEditForm() {
        var form = document.getElementById('editPostForm');
        form.style.display = 'none';
    }
</script>

</html>
