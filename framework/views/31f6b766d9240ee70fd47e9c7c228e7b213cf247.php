<?php $__env->startSection('content'); ?>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<link href="css/homebladestyle.css" rel="stylesheet">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            <div class="row">
                <button class="col-md-4 col-md-offset add" id="addSong" onclick="showAddSong()" >Dodaj utwór</button>
                 <button class="col-md-4 col-md-offset add" id="addAlbum"onclick="showAddAlbum()">Dodaj album</button>
                <button class="col-md-4 col-md-offset add" id="addPlaylist" onclick="showAddPlaylist()">Dodaj playlistę</button>
            </div>
            <script type="text/javascript">
                $(document).ready(function(){
                    $('#addSongForm').slideUp(0);
                     $('#addAlbumForm').slideUp(0);
                     $('#addPlaylistForm').slideUp(0);
                    $('#albums').hide();
                    
                });
                function hideall()
                {
                    $('#addPlaylistForm').slideUp(0);
                    $('#addSongForm').slideUp(0);
                     $('#addAlbumForm').slideUp(0);
                    $('#albums').hide();
                }
                function showAddSong()
                {
                    hideall();
                    $('#addSongForm').slideDown(500);
                }
                function showAlbums()
                {
                    $('#albums').show();
                }
                function setAlbum(a)
                {
                    
                    document.getElementById('albumset').value=a;
                }
                function showAddAlbum()
                {
                    hideall();
                    $('#addAlbumForm').slideDown(500);
                }
                function showAddPlaylist()
                {
                     hideall();
                     $('#addPlaylistForm').slideDown(500);
                }
                            </script>
            <div class="row">
            <div class="form-group col-md-6" id="addSongForm">
                            <form enctype="multipart/form-data" action="home" method="POST">
                                <label>Tytuł</label><input type="text" class="form-control" name="title" required><br/>
                                <label>Plik</label><input type="file" class="form-control" name="source" required><br/>
                                <label>Album(opcj.)</label><input type="number" class="form-control" name="album" id="albumset" onclick="showAlbums()"><br/>
                                <label>Gatunek(opcj.)</label><input type="text" class="form-control" name="genre" ><br/>
                                <label>Okładka(opcj.)</label><input type="file" class="form-control" name="cover"><br/>
                                <label>Autor towarzyszący(opcj.)</label><input type="text" class="form-control" name="feat"><br/>
                                <label>Licencja(opcj.)</label><input type="text" class="form-control" name="license"><br/>
                                <?php echo csrf_field(); ?>
                                
                                <button type="submit" name="addSong" class="btn btn-primary">Dodaj</button>
                            </form>
            </div>
                <div class="form-group col-md-6" id="albums">
                                <h2>Dostępne albumy</h2>
                                <?php
                                    foreach ($albums as $a)
                                    {
                                        echo '<div class="col-md-12" id="album"><a href="#" onclick="setAlbum('. json_encode($a->idalbums) .')">'
                                       .$a->title.'</a></div>';
                                    }
                                ?>
                            </div>
            <div class="form-group col-md-12" id="addAlbumForm">
                            <form enctype="multipart/form-data" action="home" method="POST">
                                <label>Tytuł</label><input type="text" class="form-control" name="title" required><br/>
                                <label>Opis</label><input type="text" class="form-control" name="describe" ><br/>
                                <label>Gatunek(opcj.)</label><input type="text" class="form-control" name="genre" ><br/>
                                <label>Okładka(opcj.)</label><input type="file" class="form-control" name="cover"><br/>
                                <?php echo csrf_field(); ?>
                                
                                <button type="submit" name="addAlbum" class="btn btn-primary">Dodaj</button>
                            </form>
            </div>
                <div class="form-group col-md-12" id="addPlaylistForm">
                            <form enctype="multipart/form-data" action="home" method="POST">
                                <label>Tytuł</label><input type="text" class="form-control" name="name" required><br/>
                                <label>Publiczna?</label><input type="checkbox" class="form-control" name="public" value="publiczna" ><br/>                                
                                <?php echo csrf_field(); ?>
                                
                                <button type="submit" name="addPlaylist" class="btn btn-primary">Dodaj</button>
                            </form>
            </div>

                            
            </div>
            
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projekt_zespolowy(stable)\resources\views/home.blade.php ENDPATH**/ ?>