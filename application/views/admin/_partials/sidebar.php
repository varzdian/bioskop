<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Overview</span>
        </a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('admin/film') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Film</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('admin/tayang') ?>">
            <i class="fas fa-fw fa-cog"></i>
            <span>Tayang</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('admin/bioskop') ?>">
            <i class="fas fa-fw fa-cog"></i>
            <span>Bioskop</span></a>
    </li>
</ul>
