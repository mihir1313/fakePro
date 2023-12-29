@extends('layouts.index')
@section('dashboard-title', 'Dropzone')
@section('dashboard-content')

<div class="container">

<div class="container">

    <div class="row">

        <div class="col-md-12">

            <h1>Laravel 9 Drag and Drop File Upload with Dropzone JS - ItSolutionStuff.com</h1>

    

            <form action="{{ route('dropzone.save') }}" method="post" enctype="multipart/form-data" id="image-upload" class="dropzone">

                @csrf

                <div>

                    <h4>Upload Multiple Image By Click On Box</h4>

                </div>

            </form>

        </div>

    </div>

</div>

</div>




@endsection
@section('dashboard-footer')
    <script>
    Dropzone.autoDiscover = false;

var dropzone = new Dropzone('#image-upload', {
    thumbnailWidth: 200,
    maxFilesize: 1,
    acceptedFiles: ".jpeg,.jpg,.png,.gif"
});

// Prevent Dropzone's default file selection behavior
dropzone.hiddenFileInput.setAttribute("disabled", "disabled");

document.getElementById('image-upload').addEventListener('click', function (e) {
    e.preventDefault(); // Prevent default form submission

    // Custom UI for user selection
    var choice = prompt("Select from camera (type 'camera') or files (type 'files'):").toLowerCase();

    if (choice === 'camera') {
        // Open camera if chosen
        navigator.mediaDevices.getUserMedia({ video: true })
            .then(function (stream) {
                // Handle camera stream - capture image using canvas, etc.
                // You'll need to implement camera handling logic here
                alert("Camera access granted! Now capture the image.");
            })
            .catch(function (error) {
                // Handle errors
                console.error('Camera access denied: ', error);
                alert("Camera access denied!");
            });
    } else if (choice === 'files') {
        // If choosing files, trigger the file selection manually
        dropzone.hiddenFileInput.removeAttribute("disabled");
        dropzone.hiddenFileInput.click();
    } else {
        // If an invalid choice or canceled, do nothing or show a message
        alert('Invalid choice or canceled. Please try again.');
    }
});

// Listen for a file added to Dropzone
dropzone.on("addedfile", function () {
    // Disable the hidden input again to prevent immediate file selection
    dropzone.hiddenFileInput.setAttribute("disabled", "disabled");
});


    </script>
@endsection
