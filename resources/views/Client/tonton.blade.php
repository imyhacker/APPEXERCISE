<!DOCTYPE html>
<html lang="en">
<x-Client.head/>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <x-Client.loading />
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <x-Client.navbar_video :data="$data"/>
        <x-Client.tonton :data="$data"/>
        <!-- Footer Start -->
        <x-Client.footer class="mt-5"/>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    <x-Client.script />
</body>

</html>
