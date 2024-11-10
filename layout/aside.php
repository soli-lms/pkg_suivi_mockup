<!-- Suivi d'avencement START -->
<li class="nav-item has-treeview">
          <a href="#"
            class="nav-link <?php echo (strpos($current_route, "Suivi d'avencement") !== false) ? 'active' : ''; ?>">
            <i class="fa-solid fa-signal"></i>
            <p>
              Suivi d'avencement
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/modules/pkg_suivi/Formateur/SuiveCompetences.php"
                class="nav-link <?php echo (strpos($current_route, 'Suivi des compétences') !== false) ? 'active' : ''; ?>">
                <i class="fa-solid  fa-star"></i>
                <p>Suivi des compétences</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/modules/pkg_suivi/Formateur/SuiveProjets.php"
                class="nav-link <?php echo (strpos($current_route, 'Suivi des projets') !== false) ? 'active' : ''; ?>">
                <i class="fa-solid fa-folder-open"></i>
                <p>Suivi des projets</p>
              </a>
            </li>
          </ul>
</li>