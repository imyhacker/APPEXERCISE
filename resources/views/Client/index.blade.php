<!DOCTYPE html>
<html lang="en">
<x-Client.head />

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <x-Client.loading />
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <x-Client.navbar />
        <!-- Navbar & Hero End -->


        <!-- Feature Start -->
        <x-Client.fitur />
        <!-- Feature End -->


        <!-- About Start -->
        <x-Client.start />
        <!-- About End -->

<!-- Newsletter Start -->
<x-Client.news />
        <!-- Newsletter End -->


        <!-- Projects Start -->
        <x-Client.project :blog="$blog" :tag="$tag"/>
        <!-- Projects End -->

        <!-- Footer Start -->
        <x-Client.footer :pengaturan="$pengaturan"/>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    <x-Client.script />
</body>

</html>
