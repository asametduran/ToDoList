# ToDoList

Bu proje, günlük görevlerinizi düzenli bir şekilde yönetmenizi sağlayan bir ToDoList uygulamasıdır. **ToDoList**, yapılacak görevleri kolayca ekleyebileceğiniz, düzenleyebileceğiniz ve tamamladığınızda işaretleyebileceğiniz basit bir uygulama olarak geliştirilmiştir.

## İçindekiler

- [Özellikler](#özellikler)
- [Kullanılan Teknolojiler](#kullanılan-teknolojiler)
- [Kurulum](#kurulum)
- [Kullanım](#kullanım)
- [Katkı](#katkı)
- [Lisans](#lisans)

## Özellikler

- Görev ekleme, düzenleme ve silme
- Tamamlanan görevleri işaretleme
- Görevlerin tamamlanma durumlarını takip etme
- Kullanıcı dostu ve basit bir arayüz

## Kullanılan Teknolojiler

Bu projede aşağıdaki teknolojiler ve araçlar kullanılmıştır:

- **Python** - Backend işlemleri için
- **Flask** - Web framework
- **HTML/CSS** - Arayüz tasarımı için
- **JavaScript** - Dinamik içerik ve kullanıcı etkileşimi için
- **SQLite** - Veritabanı yönetimi için

## Kurulum

Proje dosyalarını bilgisayarınıza indirdikten sonra aşağıdaki adımları izleyerek kurulumu tamamlayabilirsiniz.

### Gereksinimler

- Python 3.x
- Flask (Python kütüphanesi)
- Git (projenin güncellemelerini takip etmek için opsiyonel)

### Adım 1: Projeyi Klonlayın

Öncelikle, projeyi GitHub üzerinden bilgisayarınıza klonlayın:

```bash
git clone https://github.com/asametduran/ToDoList.git
cd ToDoList
```

### Adım 2: Gereksinimleri Yükleyin

Gerekli Python kütüphanelerini yüklemek için aşağıdaki komutu çalıştırın:

```bash
pip install -r requirements.txt
```

### Adım 3: Uygulamayı Başlatın

Kurulum tamamlandıktan sonra aşağıdaki komutla uygulamayı başlatabilirsiniz:

```bash
flask run
```

Tarayıcınızda `http://127.0.0.1:5000` adresine giderek uygulamaya erişebilirsiniz.

## Kullanım

1. **Görev Ekleme** - Yeni bir görev eklemek için ana sayfadaki görev ekleme formunu kullanın.
2. **Görev Düzenleme** - Eklenmiş görevlerin üzerine tıklayarak düzenleme moduna geçin.
3. **Görev Tamamlama** - Tamamlanan görevleri işaretleyerek takip edin veya görevleri silin.

## Katkı

Katkıda bulunmak isterseniz, lütfen şu adımları izleyin:

1. Bu projeyi forklayın.
2. Yeni bir dal oluşturun (`git checkout -b feature/yeniozellik`).
3. Değişikliklerinizi commit edin (`git commit -m 'Yeni özellik eklendi'`).
4. Dalınızı push edin (`git push origin feature/yeniozellik`).
5. Bir Pull Request gönderin.

## Lisans

Bu proje MIT Lisansı ile lisanslanmıştır. Daha fazla bilgi için `LICENSE` dosyasını inceleyin.
