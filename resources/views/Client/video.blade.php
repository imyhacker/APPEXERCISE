<!DOCTYPE html>
<html lang="en">
<x-Client.head />

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <x-Client.loading />
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <x-Client.navbar2 :r="$r"/>
        <!-- Navbar & Hero End -->
        <x-Client.project_video :video="$video" />

        <!-- Footer Start -->
        <x-Client.footer />
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    <x-Client.script />
</body>

</html>
