<!-- resources/views/component/create.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/form.css">
    <title>Create New Post</title>
</head>

<body>

    <div class="form_container">
        <div class="main_form">
            <form id="createPostForm" action="{{ url('/create') }}" method="post" class="form_contain"
                enctype="multipart/form-data">
                @csrf <!-- CSRF protection -->
                <div class="closer" onclick="toggleCreateForm()">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <h2 class="post">Create new post</h2>
                <div class="form_padder">
                    <div class="input_sub_sections">
                        <label for="name">Name</label>
                        <div class="input_container">
                            <input type="text" required name="name" value="{{ old('name') }}" />
                        </div>
                    </div>
                    <div class="input_sub_sections">
                        <label for="description">Description</label>
                        <div class="input_container">

                            <textarea name="description" required id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="input_sub_sections">
                        <label for="image">Image</label>
                        <div class="input_container">
                            <input type="file" name="image" required />
                        </div>
                    </div>
                    <div class="form_btn">
                        <button type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        function toggleCreateForm() {
            var form = document.getElementById('createPostForm');
            form.style.display = 'none';
        }
    </script>

</body>

</html>
