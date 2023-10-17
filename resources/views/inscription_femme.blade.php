<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <form action="{{ route('inscription-femme.store') }}" method="POST">
                    @csrf

                    <!-- Informations pour la recherche d'un conjoint idéal -->
                    <h2>الشريك المثالي</h2>

                    <!-- Informations sur le partenaire recherché -->
                    <div class="form-group">
                        <label for="age_range">أبحث عن زوج سنه:</label>
                        <input id="age_range" type="text" class="form-control" name="age_range" required>
                    </div>

                    <div class="form-group">
                        <label for="province">الوالية:</label>
                        <input id="province" type="text" class="form-control" name="province" required>
                    </div>

                    <div class="form-group">
                        <label for="current_residence">مكان السكن:</label>
                        <input id="current_residence" type="text" class="form-control" name="current_residence" required>
                    </div>

                    <div class="form-group">
                        <label for="housing_type">نوع المسكن:</label>
                        <input id="housing_type" type="text" class="form-control" name="housing_type" required>
                    </div>

                    <h3>موافقة الزواج</h3>
                    <div class="form-group">
                        <label for="marry_stranger">أوافق الزواج من رجل مي:</label>
                        <select id="marry_stranger" class="form-control" name="marry_stranger" required>
                            <option value="نعم">نعم</option>
                            <option value="لا">لا</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="marry_divorced">أوافق الزواج من رجل مطلق:</label>
                        <select id="marry_divorced" class="form-control" name="marry_divorced" required>
                            <option value="نعم">نعم</option>
                            <option value="لا">لا</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="marry_with_children">أوافق الزواج من رجل لديه أطفال:</label>
                        <select id="marry_with_children" class="form-control" name="marry_with_children" required>
                            <option value="نعم">نعم</option>
                            <option value="لا">لا</option>
                        </select>
                    </div>

                    <!-- Informations supplémentaires -->
                    <h3>معلومات إضافية</h3>
                    <div class="form-group">
                        <label for="country">البلد:</label>
                        <input id="country" type="text" class="form-control" name="country" required>
                    </div>

                    <div class="form-group">
                        <label for="age">العمر:</label>
                        <input id="age" type="text" class="form-control" name="age" required>
                    </div>

                    <div class="form-group">
                        <label for="height">الطول (بالسنتيمتر):</label>
                        <input id="height" type="text" class="form-control" name="height" required>
                    </div>

                    <div class="form-group">
                        <label for="weight">الوزن (بالكيلوغرام):</label>
                        <input id="weight" type="text" class "form-control" name="weight" required>
                    </div>

                    <div class="form-group">
                        <label for="hair_color">لون الشعر:</label>
                        <input id="hair_color" type="text" class="form-control" name="hair_color" required>
                    </div>

                    <div class="form-group">
                        <label for="eye_color">لون العين:</label>
                        <input id="eye_color" type="text" class="form-control" name="eye_color" required>
                    </div>

                    <div class="form-group">
                        <label for="marital_status">الحالة الاجتماعية:</label>
                        <input id="marital_status" type="text" class="form-control" name="marital_status" required>
                    </div>

                    <div class="form-group">
                        <label for="children_count">عدد الأطفال حاليا:</label>
                        <input id="children_count" type="text" class="form-control" name="children_count" required>
                    </div>

                    <div class="form-group">
                        <label for="fertility">القدرة على الإنجاب:</label>
                        <select id="fertility" class="form-control" name="fertility" required>
                            <option value="نعم">نعم</option>
                            <option value="لا">لا</option>
                        </select>
                    </div>

                    <!-- Informations sur l'éducation et la profession -->
                    <h3>التعليم والمهنة</h3>
                    <div class="form-group">
                        <label for="education_level">المستوى التعليمي:</label>
                        <input id="education_level" type="text" class="form-control" name="education_level" required>
                    </div>

                    <div class="form-group">
                        <label for="occupation">المهنة:</label>
                        <input id="occupation" type="text" class="form-control" name="occupation" required>
                    </div>

                    <div class="form-group">
                        <label for="current_residence">مكان الإقامة والمستقبل:</label>
                        <input id="current_residence" type="text" class="form-control" name="current_residence" required>
                    </div>

                    <div class="form-group">
                        <label for="work_after_marriage">الرغبة في العمل بعد الزواج:</label>
                        <select id="work_after_marriage" class="form-control" name="work_after_marriage" required>
                            <option value="نعم">نعم</option>
                            <option value="لا">لا</option>
                        </select>
                    </div>

                    <label for="wearing_hijab_now">ارتداء الحجاب حاليًا:</label>
                    <select id="wearing_hijab_now" class="form-control" name="wearing_hijab_now" required>
                        <option value="نعم">نعم</option>
                        <option value="لا">لا</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="will_wear_hijab_future">سوف أرتدي الحجاب مستقبلًا:</label>
                    <select id="will_wear_hijab_future" class="form-control" name="will_wear_hijab_future" required>
                        <option value="نعم">نعم</option>
                        <option value="لا">لا</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="practicing_religious_rituals">أمارس الشعائر الدينية الأساسية:</label>
                    <select id="practicing_religious_rituals" class="form-control" name="practicing_religious_rituals" required>
                        <option value="نعم">نعم</option>
                        <option value="لا">لا</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="chronic_illness">لدي مرض مزمن:</label>
                    <select id="chronic_illness" class="form-control" name="chronic_illness" required>
                        <option value="نعم">نعم</option>
                        <option value="لا">لا</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="disability">لدي إعاقة:</label>
                    <select id="disability" class="form-control" name="disability" required>
                        <option value="نعم">نعم</option>
                        <option value="لا">لا</option>
                    </select>
                </div>

                <!-- Coordonnées de contact -->
                <div class="form-group">
                    <label for="phone_number">رقم الهاتف:</label>
                    <input id="phone_number" type="text" class="form-control" name="phone_number" required>
                </div>

                <div class="form-group">
                    <label for="email">البريد الإلكتروني:</label>
                    <input id="email" type="email" class="form-control" name="email" required>
                </div>

                <div class="form-group">
                    <label for="password">كلمة المرور:</label>
                    <input id="password" type="password" class="form-control" name="password" required>
                </div>

                <div class="form-group">
                    <label for="password_confirmation">تأكيد كلمة المرور:</label>
                    <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
                </div>

                <!-- Bouton de soumission -->
                <button type="submit" class="btn btn-primary">سجل</button>
            </form>
        </div>
    </div>
</div>
</div>

