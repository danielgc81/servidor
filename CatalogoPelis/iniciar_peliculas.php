<?php
if (!isset($_SESSION["peliculas"])) {
   if ($_SESSION["lang"] == "es") {
      $_SESSION["peliculas"] = [
         new Pelicula("El editor de libros", 2016, "Michael Grandage", "Colin Firth, Jude Law, Nicole Kidman", "Biografía"),
         new Pelicula("Un amor entre dos mundos", 2012, "Juan Diego Solanas", "Jim Sturgess, Kirsten Dunst, Timothy Spall", "Ciencia Ficción"),
         new Pelicula("Una cuestión de tiempo", 2013, "Richard Curtis", "Domhnall Gleeson, Rachel McAdams, Bill Nighy", "Romance"),
         new Pelicula("El indomable Will Hunting", 1997, "Gus Van Sant", "Matt Damon, Robin Williams, Ben Affleck", "Drama"),
         new Pelicula("Descubriendo a Forrester", 2000, "Gus Van Sant", "Sean Connery, Rob Brown, F. Murray Abraham, Anna Paquin", "Drama"),
         new Pelicula("El club de los poetas muertos", 1989, "Peter Weir", "Robin Williams, Robert Sean Leonard, Ethan Hawke, Josh Charles", "Drama"),
         new Pelicula("Gattaca", 1997, "Andrew Niccol", "Ethan Hawke, Uma Thurman, Jude Law, Loren Dean", "Ciencia Ficción"),
         new Pelicula("In Time", 2011, "Andrew Niccol", "Justin Timberlake, Amanda Seyfried, Vincent Kartheiser", "Ciencia Ficción"),
         new Pelicula("Una mente maravillosa", 2001, "Ron Howard", "Russell Crowe, Ed Harris, Jennifer Connelly", "Biografía"),
         new Pelicula("Big Fish", 2003, "Tim Burton", "Ewan McGregor, Albert Finney, Billy Crudup, Jessica Lange", "Drama"),
         new Pelicula("El club de la lucha", 1999, "David Fincher", "Edward Norton, Brad Pitt, Helena Bonham Carter", "Thriller"),
         new Pelicula("Eduardo Manostijeras", 1990, "Tim Burton", "Johnny Depp, Winona Ryder, Dianne Wiest", "Fantasía"),
         new Serie("The Walking Dead", 2010, "Frank Darabont", "Andrew Lincoln, Norman Reedus, Melissa McBrige, Lauren Cohan, Jon Bernthal", "Drama", 11),
         new Serie("Stranger Things", 2016, "The Duffer Brothers", "Winona Ryder, David Harbour, Millie Bobby Brown", "Ciencia Ficción", 4),
         new Cortometraje("El corto nocturno", 2018, "Ana Pérez", "Actor A, Actor B", "Drama", 22)
      ];
   } else if ($_SESSION["lang"] == "en") {
      $_SESSION["peliculas"] = [
         new Pelicula("Genius", 2016, "Michael Grandage", "Colin Firth, Jude Law, Nicole Kidman", "Biography"),
         new Pelicula("Upside Down", 2012, "Juan Diego Solanas", "Jim Sturgess, Kirsten Dunst, Timothy Spall", "Science Fiction"),
         new Pelicula("About Time", 2013, "Richard Curtis", "Domhnall Gleeson, Rachel McAdams, Bill Nighy", "Romance"),
         new Pelicula("Good Will Hunting", 1997, "Gus Van Sant", "Matt Damon, Robin Williams, Ben Affleck", "Drama"),
         new Pelicula("Finding Forrester", 2000, "Gus Van Sant", "Sean Connery, Rob Brown, F. Murray Abraham, Anna Paquin", "Drama"),
         new Pelicula("Dead Poets Society", 1989, "Peter Weir", "Robin Williams, Robert Sean Leonard, Ethan Hawke, Josh Charles", "Drama"),
         new Pelicula("Gattaca", 1997, "Andrew Niccol", "Ethan Hawke, Uma Thurman, Jude Law, Loren Dean", "Science Fiction"),
         new Pelicula("In Time", 2011, "Andrew Niccol", "Justin Timberlake, Amanda Seyfried, Vincent Kartheiser", "Science Fiction"),
         new Pelicula("A Beautiful Mind", 2001, "Ron Howard", "Russell Crowe, Ed Harris, Jennifer Connelly", "Biography"),
         new Pelicula("Big Fish", 2003, "Tim Burton", "Ewan McGregor, Albert Finney, Billy Crudup, Jessica Lange", "Drama"),
         new Pelicula("Fight Club", 1999, "David Fincher", "Edward Norton, Brad Pitt, Helena Bonham Carter", "Thriller"),
         new Pelicula("Edward Scissorhands", 1990, "Tim Burton", "Johnny Depp, Winona Ryder, Dianne Wiest", "Fantasy"),
         new Serie("The Walking Dead", 2010, "Frank Darabont", "Andrew Lincoln, Norman Reedus, Melissa McBrige, Lauren Cohan, Jon Bernthal", "Drama", 11),
         new Serie("Stranger Things", 2016, "The Duffer Brothers", "Winona Ryder, David Harbour, Millie Bobby Brown", "Ciencia Ficción", 4),
         new Cortometraje("The nocturnal short", 2018, "Ana Pérez", "Actor A, Actor B", "Drama", 22)
      ];
   }
}
