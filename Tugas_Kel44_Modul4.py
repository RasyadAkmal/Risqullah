import Tugas

print ("Selamat datang di aplikasi CARANG (Cari Orang)")
print ("Bagaimana ciri orang yang anda cari?")
print ("Jenis kelamin :\n1. Laki-laki\n2. Perempuan ")

a = int(input("Masukkan jenis kelamin: "))

if a == 1:
    b = int(input("Masukkan tinggi badan (cm): "))
    if b == 175:
        c = str(input("Masukkan ciri khusus: "))
        if c == "tato di lengan kanan":
            p1 = Tugas.Tugas("Rio")

            p1.awas(3)

            p1.temu()
        else :
            print ("Orang yang anda cari tidak ditemukan!")
    else :
        print ("Orang yang anda cari tidak ditemukan!")
elif a == 2:
    b = int(input("Masukkan tinggi badan (cm): "))
    if b == 170:
        c = str(input("Masukkan ciri khusus: "))
        if c == "rambut keriting":
            p1 = Tugas.Tugas("Sinta")

            p1.awas(3)

            p1.temu()
        else :
            print ("Orang yang anda cari tidak ditemukan!")
    else :
        print ("Orang yang anda cari tidak ditemukan!")
else :
    print ("Orang yang anda cari tidak ditemukan!")

    
print ("Hello World!!")
