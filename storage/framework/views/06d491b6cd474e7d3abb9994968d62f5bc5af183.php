

<?php $__env->startSection('title', 'Projects'); ?>

<?php $__env->startSection('content'); ?>
<h1>My Projects</h1>
<div class="projects-grid">
    <div class="project">
        <h3 >E-Commerce Platform</h3>
        <p>A Laravel-based e-commerce platform with features like product management, user authentication, cart functionality, and secure payment gateway integration. The admin panel allows for easy management of products and orders.</p>
    </div>
    <div class="project">
        <h3> Blog System with Admin Panel</h3>
        <p>A content management system built using Laravel, enabling users to create, edit, and publish blog posts. The admin panel includes categories, tags, and user management, with role-based access control for administrators.</p>
    </div>
    
    <!-- Add more projects as needed -->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\portfolio\resources\views/projects.blade.php ENDPATH**/ ?>