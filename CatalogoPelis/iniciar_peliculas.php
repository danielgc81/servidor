<?php
if (!isset($_SESSION["peliculas"])) {
   if ($_SESSION["lang"] == "es") {
      $_SESSION["peliculas"] = [
         ["titulo" => "El editor de libros", "año" => 2016, "director" => "Michael Grandage", "actores" => "Colin Firth, Jude Law, Nicole Kidman", "genero" => "Biografía"],
         ["titulo" => "Un amor entre dos mundos", "año" => 2012, "director" => "Juan Diego Solanas", "actores" => "Jim Sturgess, Kirsten Dunst, Timothy Spall", "genero" => "Ciencia ficción"],
         ["titulo" => "Una cuestión de tiempo", "año" => 2013, "director" => "Richard Curtis", "actores" => "Domhnall Gleeson, Rachel McAdams, Bill Nighy", "genero" => "Romance"],
         ["titulo" => "El indomable Will Hunting", "año" => 1997, "director" => "Gus Van Sant", "actores" => "Matt Damon, Robin Williams, Ben Affleck", "genero" => "Drama"],
         ["titulo" => "Descubriendo a Forrester", "año" => 2000, "director" => "Gus Van Sant", "actores" => "Sean Connery, Rob Brown, F. Murray Abraham, Anna Paquin", "genero" => "Drama"],
         ["titulo" => "El club de los poetas muertos", "año" => 1989, "director" => "Peter Weir", "actores" => "Robin Williams, Robert Sean Leonard, Ethan Hawke, Josh Charles", "genero" => "Drama"],
         ["titulo" => "Gattaca", "año" => 1997, "director" => "Andrew Niccol", "actores" => "Ethan Hawke, Uma Thurman, Jude Law, Loren Dean", "genero" => "Ciencia ficción"],
         ["titulo" => "In Time", "año" => 2011, "director" => "Andrew Niccol", "actores" => "Justin Timberlake, Amanda Seyfried, Vincent Kartheiser", "genero" => "Ciencia ficción"],
         ["titulo" => "Una mente maravillosa", "año" => 2001, "director" => "Ron Howard", "actores" => "Russell Crowe, Ed Harris, Jennifer Connelly", "genero" => "Biografía"],
         ["titulo" => "Big Fish", "año" => 2003, "director" => "Tim Burton", "actores" => "Ewan McGregor, Albert Finney, Billy Crudup, Jessica Lange", "genero" => "Drama"],
         ["titulo" => "El club de la lucha", "año" => 1999, "director" => "David Fincher", "actores" => "Edward Norton, Brad Pitt, Helena Bonham Carter", "genero" => "Thriller"],
         ["titulo" => "Eduardo Manostijeras", "año" => 1990, "director" => "Tim Burton", "actores" => "Johnny Depp, Winona Ryder, Dianne Wiest", "genero" => "Fantasía"]
      ];
   } else if ($_SESSION["lang"] == "en") {
      $_SESSION["peliculas"] = [
         ["titulo" => "Genius", "año" => 2016, "director" => "Michael Grandage", "actores" => "Colin Firth, Jude Law, Nicole Kidman", "genero" => "Biography"],
         ["titulo" => "Upside Down", "año" => 2012, "director" => "Juan Diego Solanas", "actores" => "Jim Sturgess, Kirsten Dunst, Timothy Spall", "genero" => "Sciencie Fiction"],
         ["titulo" => "About Time", "año" => 2013, "director" => "Richard Curtis", "actores" => "Domhnall Gleeson, Rachel McAdams, Bill Nighy", "genero" => "Romance"],
         ["titulo" => "Good Will Hunting", "año" => 1997, "director" => "Gus Van Sant", "actores" => "Matt Damon, Robin Williams, Ben Affleck", "genero" => "Drama"],
         ["titulo" => "Finding Forrester", "año" => 2000, "director" => "Gus Van Sant", "actores" => "Sean Connery, Rob Brown, F. Murray Abraham, Anna Paquin", "genero" => "Drama"],
         ["titulo" => "Dead Poets Society", "año" => 1989, "director" => "Peter Weir", "actores" => "Robin Williams, Robert Sean Leonard, Ethan Hawke, Josh Charles", "genero" => "Drama"],
         ["titulo" => "Gattaca", "año" => 1997, "director" => "Andrew Niccol", "actores" => "Ethan Hawke, Uma Thurman, Jude Law, Loren Dean", "genero" => "Sciencie Fiction"],
         ["titulo" => "In Time", "año" => 2011, "director" => "Andrew Niccol", "actores" => "Justin Timberlake, Amanda Seyfried, Vincent Kartheiser", "genero" => "Sciencie Fiction"],
         ["titulo" => "A Beautiful Mind", "año" => 2001, "director" => "Ron Howard", "actores" => "Russell Crowe, Ed Harris, Jennifer Connelly", "genero" => "Biography"],
         ["titulo" => "Big Fish", "año" => 2003, "director" => "Tim Burton", "actores" => "Ewan McGregor, Albert Finney, Billy Crudup, Jessica Lange", "genero" => "Drama"],
         ["titulo" => "Fight Club", "año" => 1999, "director" => "David Fincher", "actores" => "Edward Norton, Brad Pitt, Helena Bonham Carter", "genero" => "Thriller"],
         ["titulo" => "Edward Scissorhands", "año" => 1990, "director" => "Tim Burton", "actores" => "Johnny Depp, Winona Ryder, Dianne Wiest", "genero" => "Fantasy"]
      ];
   }
}

