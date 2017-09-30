<?php
include 'header.php';
?>

<!-- Contact -->
        <section id="c_contact" class="halfarea">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-7 col-sm-offset-4 col-md-offset-6">
                        <h2>Bizimle iletişime geçin</h2>
                        <h4>Formu doldurun, en kısa sürede size dönelim.</h4>
                        <?php if ($_GET['send']=='true'){ ?>
                            <h5>Mesajınız başarıyla gönderildi.</h5>
                       <?php }else if($_GET['send']=='false'){?>
                            <h5>Bir hata oluştu. İnternet bağlantınızı kontrol edip tekrar deneyin.</h5>
                       <?php } ?>
                        <hr>        <!--class="contact-form"-->
                        <form  method="POST" action="admin/baglantii/iletisimislem.php">
                            <div class="input-field col-sm-12">
                                <div class="form-group">
                                    <input class="col-md-10" id="form-name" name="isim" type="text" placeholder="İsminiz *" required="required"
                                        data-error="Bu alanın doldurulması zorunludur.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="input-field  col-sm-12">
                                <div class="form-group">
                                    <input class="col-md-10" id="form-email" name="email" type="email" placeholder="E-posta adresiniz *" required="required"
                                        data-error="Bu alanın doldurulması zorunludur.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="input-field col-sm-12">
                                <div class="form-group">
                                    <input class="col-md-10" id="form-tel" name="telno" type="tel" placeholder="Telefon numaranız" data-error="Lütfen doğru bir telefon numarası giriniz.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="input-field  col-sm-12">
                                <div class="form-group">
                                    <textarea class="col-md-12" id="form-textarea" name="mesaj" id="" cols="55" rows="5" placeholder="Mesajınızı buraya yazabilirsiniz *"
                                        required="required" data-error="Bu alanın doldurulması zorunludur."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <input type="submit" name="mesajgonder" value="Gönder">
                                <div class="messages"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="imagearea col-md-5 col-sm-3">
                <div id="map"></div>
                <script src="js/gmaps.js"></script>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZx9k0pRe1UtmcERUpw8IzQkKDhx08lUs&callback=initMap"
                    async defer></script>
            </div>
        </section>

        <div class="area blog-social">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 hidden-xs">
                        <h3>Bizi takip etmeyi unutmayın</h3>
                    </div>
                    <div class="col-sm-6 col-xs-12 right xs-center">
                        <div class="social">
                            <a href="<?php echo $ayarcek['ayar_facebook'];?>"><i class="fa fa-facebook"></i></a>
                            <a href="<?php echo $ayarcek['ayar_twitter'];?>"><i class="fa fa-twitter"></i></a>
                            <a href="<?php echo $ayarcek['ayar_instagram'];?>"><i class="fa fa-instagram"></i></a>
                            <a href="<?php echo $ayarcek['ayar_linkedin'];?>"><i class="fa fa-linkedin"></i></a>
                            <a href="<?php echo $ayarcek['ayar_google'];?>"><i class="fa fa-google"></i></a>
                            <a href="<?php echo $ayarcek['ayar_youtube'];?>"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 title">
                        <h2>Sıkça Sorulan Sorular</h2>
                        <h4>Aklınızda soru kalmasın</h4>
                    </div>
                </div>
                <div class="row m-space">
                    <div class="col-md-6">
                        <h3>Genel SSS</h3>
                        <div class="accordion">
                            <li>✓. SAÜEMK NEDİR?
                                <ul>
                                    <p>Sakarya Üniversitesi Endüstri mühendisliği kulübü adı altında 1994 yılında kurulmuş olan birçok farklı bölümden öğrencilerin üye olduğu, Sakarya Üniversitesinin ekolü haline gelmiş aktif bir öğrenci topluluğudur.</p>
                                </ul>
                            </li>

                            <li>✓. ENDÜSTRİ MÜHENDİSLİĞİ NEDİR?
                                <ul>
                                    <p>Malzeme, işgücü, makine ve paranın verimli kullanımını sağlamak için yöntem ve teknikler geliştirerek uygulamayı amaçlayan Endüstri Mühendisliği için aşağıdaki tanım öngörülmektedir: "Endüstri Mühendisliği, insan, malzeme ve makineden oluşan bütünleşik sistemlerin tasarım, kuruluş ve geliştirilmesiyle ilgilenir.
                                    </p>
                                </ul>
                            </li>

                            <li>✓. SAKARYA ÜNİVERSİTESİ KULÜBÜNE NEREDEN ÜYE OLABİLİRİM?
                                <ul>
                                    <p>İlk hafta Esentepe kampüsünde bulunan stantlarımızdan daha sonra ise M5 binasında bulunan kulüp odamızdan üye olabilirsiniz. Ayrıca <a href="www.sauemk.com/register-form.php">SAUEMK</a> internet sitesinden üye kayıtlarımız başlamıştır.
                                    </p>
                                </ul>
                            </li>

                              <li>✓. ENDÜSTRİ MÜHENDİSLİĞİ KULÜBÜNE KİMLER ÜYE OLABİLİR?
                                <ul>
                                    <p>Sakarya üniversitesi bünyesinde okumakta olan bütün öğrenciler üye olabilir. Endüstri mühendisliği veya mühendislik bölümü öğrencileri diye bir kıstas bulunmamaktadır.</p>
                                </ul>
                            </li>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3>Biz Kimiz</h3>
                        <div class="accordion">
                            <li>✓. SAÜEMK NE YAPAR?
                                <ul>
                                   <p>Sene içinde düzenlediği salon etkinlikleri, eğitimler, kültürel ve teknik geziler, sosyal faaliyetler ve toplumsal sorumluluk projeleri ile kişisel, sosyal ve mesleki yaşantıya katkı sağlamaktadır.</p>
                                </ul>
                            </li>

                            <li>✓. KULÜP YÖNETİMİ NEDİR VE NASILDIR?
                                <ul>
                                   <p>9 ayrı komisyondan oluşan Saüemk, güncel olarak 15 komisyon başkanı, 1 kulüp genel sekreteri, 2 kulüp başkan yardımcısı ve 1 kulüp başkanı ile kulüp düzenini sağlamaktadır.</p>
                                    <a href="about-ust.php" class="btn"><span>Ayrıca bakınız</span></a>
                                </ul>
                            </li>
                               <li>✓. KOMİSYON NEDİR, HANGİ KOMİSYONLARA ÜYE OLABİLİRİM?
                                <ul>
                                   <p>Komisyon belirli bir görevi yerine getirmek, bir araştırma veya soruşturmayı yürütmek üzere yetkili kişilerden oluşan grup, komite anlamına gelmektedir. Saüemk’de farklı alanlarda faaliyet göstermesinden dolayı kulüp içi görev dağılımını 9 ayrı komisyon ile yürütmektedir. Öğrenci, ilgi alanı ve isteğe göre istediği komisyona üye olabilir.</p>
                                </ul>
                            </li>
                             <li>✓. EMG NEDİR?
                                <ul>
                                   <p>EMG, Saüemk’nın gelenekselleşmiş Endüstri Mühendisliği Günleri etkinliğidir. Değişen ve gelişen sektörü daha iyi anlamak için sektörün devlerini ağırlayarak, gündüzleri farklı konuşmacılar, akşamları ise eğlenceli aktivitelerin bulunduğu dopdolu bir programdır.
                                   </p>
                                </ul>
                            </li>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <h3 style="text-align: center;">Komisyonlar</h3>
                        <div class="accordion">
                            <li>✓. KOMİSYONLAR NELERDİR?
                                <ul>
                                    <p>Bilişim & Medya, insan kaynakları, eğitim, proje, teknik gezi, sosyal faaliyet, kurumsal iletişim, finans ve sponsorluk, toplumsal duyarlılık komisyonu olmak üzere 9 adet komisyon bulunmaktadır.</p>
                                </ul>
                            </li>

                            <li>✓. BİLİŞİM & MEDYA KOMİSYONU NE İŞ YAPAR?
                                <ul>
                                    <p>
                                   Bilişim & Medya Komisyonunu kulübün teknik işlerinin yapıldığı komisyondur. Etkinliklerde kullanılan afiş/broşür tasarımlarının yapılması, sosyal medyada etkinliklerin paylaşılması ve kulüp adına içerik oluşturulması bu komisyonun sorumluluğundadır. Sadece etkinlik öncesinde değil, etkinlik anında ve sonrasında da kulüp için büyük bir önem taşır. Konuşmacı sunumlarının sorunsuz bir şekilde gerçekleştirilmesi için sahnedeki araç gereçlerin temin edilmesi, rejinin kontrolü, etkinliklerden önce kayıt formlarının oluşturulması ve etkinlik anında kayıt masasının kontrol edilmesi Bilişim & Medya Komisyonun en önemli görevleri arasındadır. Bu görevleri haricinde sitenin güncel tutulması, EMKTV için röportajlar ve özel videoların oluşturulması için çalışmalar yürütür.

                                    </p>
                                </ul>
                            </li>

                            <li>✓. İNSAN KAYNAKLARI KOMİSYONU NE İŞ YAPAR?
                                <ul>
                                   <p>İnsan kaynakları komisyonu kulübün dış yüzüdür. Kulüp içinde iksız bir komisyon göremezsiniz . Komisyonlar arası bağlantı kurar. Kulüp üyelerin sorunlarına birinci elden çözüm bulmaya çalışır. Kısacası insan olan her  yerde insan kaynakları vardır..                        
                                    </p>
                                </ul>
                            </li>

                            <li>✓. SOSYAL FAALİYET KOMİSYONU NE İŞ YAPAR?
                                <ul>
                                    <p>
                                    Etkinliklerden sonra yorgunluğunuzu atmak ve okul dönemindejü stresimizi hafifletmek amacıyla hepbirlikte eğlenceli vakit geçireceğimiz organizasyonlar hazırlamayı amaçlıyoruz
                                    </p>
                                </ul>
                            </li>

                            <li>✓. TEKNİK GEZİ KOMİSYONU NE İŞ YAPAR?
                                <ul>
                                    <p>
                                        Teknik Gezi komisyonunun en büyük amaçlarından birisi gördüğümüz teorik bilgilerin öğrenci arkadaşlarımızın gözünde somutlaşmasını sağlamaktır. Buda teknik gezilerle birlikte yerinde üretim ve imalatı görerek gerçekleşir. Teknik Gezi komisyonu olarak bu amacı gerçekleştirmek için farklı sektörlerden farklı üretim tesislerine teknik geziler organize ederek öğrenci arkadaşlarımızın hem farklı sektör ve firmaları daha yakından tanıma imkanı sağlamak hemde teorik uygulamalar ile uğraşırken pratik uygulama adına da fikir ve düşünce dünyalarına ön ayak olmak için çalışıyoruz.
                                    </p>
                                </ul>
                            </li>

                            <li>✓. FİNANS KOMİSYONU NE İŞ YAPAR?
                                <ul>
                                    <p>
                                   Finans komisyonu ne iş yapar

Finans ve Sponsorluk komisyonu kulübün ihtiyaçlarını giderebilmesi, yıllık hedeflerini gerçekleştirebilmsi için gerekli maddi desteği bulmak ve yıl boyunca bu kaynakları en verimli biçimde kullanmayı amaçlayan komisyondur.

                                    </p>
                                </ul>
                            </li>

                            <li>✓. EĞİTİM KOMİSYONU NE İŞ YAPAR?
                                <ul>
                                    <p>
                                   Eğitim Komisyonu;
Üyelerimizin kariyeri için fikir sahibi olabileceği, iş hayatına girmeden önce sektörü tanıyabileceği, gelecekteki stajı ve işi hakkında ayrıntılı bilgiye sahip olma imkanı sağlayabileceği, kariyer basamaklarında eğitmenlerden yardım alabileceği teknik ve sosyal eğitimler düzenler.

                                    </p>
                                </ul>
                            </li>

                            <li>✓. TOPLUMSAL DUYARLILIK KOMİSYONU NE İŞ YAPAR?
                                <ul>
                                    <p>
                                   Toplumsal duyarlılık komisyonu sosyal sorumluluk projeleri, huzurevi ve çocuk esirgeme kurumu gibi ziyaretleri ile insanlığa,doğaya ve sosyal çevremize karşı bizlere sorumluluklarımızı hatırlatmaya, çevremize duyarlılık kazandırmaya çalışan ve kulübümüz üyeleri ile birlikte hareket ederek faydalı bireyler olmayı hedefleyen bir topluluktur.

                                    </p>
                                </ul>
                            </li>

                            <li>✓. KURUMSAL İLETİŞİM KOMİSYONU NE İŞ YAPAR?
                                <ul>
                                    <p>
                                   Kurumsal iletişim komisyonu yalnızca kulübün iletişim planlarını hazırlamakla kalmaz diğer öğrenci kulüpleri, şirketler ve mezunlar ile iletişimi sağlar.
Aynı zamanda kulüp etkinliklerini diğer üniversite ve fakültelere duyurup tanıtımını yapar.

                                    </p>
                                </ul>
                            </li>

                            <li>✓. PROJE KOMİSYONU NE İŞ YAPAR?
                                <ul>
                                    <p>
                                   SAÜEMK'nın her sene düzenli olarak yaptığı bir"Kariyer", bir tane "Sektör Zirvesi", kulübümüzün en büyük etkinliği "EMG" ve bunlar dışında da yapılabilecek projeler "Proje Komisyonu" tarafından planlanır. Etkinliğin ana teması belirlenip katılımcılarla iletişime geçilir. Katılımcıların dönüşüne göre program akışı çıkar.Komisyonda gönüllü olarak görev alan üyelerimizle birlikte bazen kimleri ağırlayabileceğimiz, bazen ağırlamak istediğimiz isimlere nasıl ulaşabiliriz sorularına yanıtlar, yapılacak panel planlamaları gibi projenin her türlü ayrıntısı planlanır. Bunlarla birlikte takım çalışması, hedeflere ulaşılması, etkinliklerin vizyonlarını düzenler. Proje koordinatörü etkinlik günü etkinliğin koordinasyonunu sağlar ve Proje Ekibi Etkinlik günü bütün sorumluluğu üstüne alır.
                                    </p>
                                </ul>
                            </li>
                            <br>
                            <br>

                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php
include 'footer.php';
?>