fun main()
{
    /* a < b
       a <= b
       a >= b
       a > b
       a == b
       a != b
       !b
     */


//    var a = 30
//    if(a > 5)
//    {
//        println("A lebih besar dari 5")
//    }else{
//        println("A lebih kecik dari 5")
//    }

    var nilai = 75
    if(nilai <= 50){
        println("Nilai Anda " + nilai +", Anda tidak tuntas")
    }else if (nilai <= 65 ){
        println("Nilai Anda " + nilai +", Anda Grade C")
    }else if (nilai <= 70){
        println("Nilai Anda " + nilai +", Anda Grade B-")
    }else if (nilai <= 80) {
        println("Nilai Anda " + nilai +", Anda Grade B")
    }else if (nilai <= 90) {
        println("Nilai Anda " + nilai +", Anda Grade A-")
    }else{
        println("Nilai Anda " + nilai +", Anda Grade A")
    }
}