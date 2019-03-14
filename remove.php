<? php
class Book{

}

class Student{
    public function __construct(Book $book){ // Dependency Injection Pattern .. adeelo el dependencies mn bara
        // $this->book = new Book; // da el ehna 3arfeno mn abl kda
        $this->book = $book;
    }
}
// badal ma el object elli esmo Student y-instantiate el dependencies bt3to mn gowa .. ana hadehalo mn bara
die(var_dump(new Student(new Book)));
// Type Hinting : ba2ool no3 el variable elli hyb2a fel parameter ehh ?? 

// kiss principle : keep it simple stupid

//kolo b2a
// ana 3aiza class Student by-instantiate el new Book da .. fa kda mfish student mn 3'er book
// fi pattern esmo Dependency Injection .... elli hagat elli el class by3tmd 3leha 
// e3melaha injection men bara msh mn gowa
// y3ni fel new Student ab3tlo (new Book)
// w fe class Student nafso ab3tlo ($book)
// w yb2a el construct $this->book = $book
// tayb law 3mlt pass l ay string 'vkuvjnl' ... hysht3'l 3ady bs ana 3aiza type mo3ayn
// hena nigi lel Type Hinting ... hwa eni a7aded variable data type elli hayegy mn bara
// so fel construct fel student ha3ml object mn book fa yb2a (Book $book)
// w a3ml pass le (new Book) wna babtdy [new Student]
