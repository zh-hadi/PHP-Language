 <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
 <a href="/" class="<?php echo $uri == "/" ?  "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white"; ?>  rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Home</a>
 <?php if($_SESSION['user'] ?? false): ?>
<a href="/about" class="<?php echo $uri == "/about" ?  "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white"; ?>  rounded-md px-3 py-2 text-sm font-medium">About</a>
<a href="/contact" class="<?php echo $uri == "/contact" ?  "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white"; ?>  rounded-md px-3 py-2 text-sm font-medium">Contact</a>
<?php endif; ?>
