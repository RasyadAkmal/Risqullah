class Tugas :

    def __init__(self, orang1):
        self.orang1 = orang1
    
    def temu(self):
        print(f"Orang yang anda cari adalah {self.orang1}")

    def awas(self, waktu):
        print("Pencarian akan selesai dalam: ")
        while waktu > 0:
            print(waktu)
            waktu -= 1
