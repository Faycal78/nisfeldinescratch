


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                <form action="{{ route('inscription.store') }}" method="POST">
                    
                        @csrf

                        <!-- Informations pour la recherche d'une épouse -->
                        <h2>أبحث عن زوجة</h2>

                        <div class="form-group">
                            <label for="age_min">العمر الأدنى</label>
                            <input id="age_min" type="number" class="form-control" name="age_min" required>
                        </div>

                        <div class="form-group">
                            <label for="age_max">العمر الأقصى</label>
                            <input id="age_max" type="number" class="form-control" name="age_max" required>
                        </div>

                        <div class="form-group">
                            <label for="wilaya">ولاية الإقامة</label>
                            <select id="wilaya" class="form-control" name="wilaya" required>
                                <!-- Options pour les wilayas -->
                                <option value="wilaya1">ولاية 1</option>
                                <option value="wilaya2">ولاية 2</option>
                                <!-- Ajoutez d'autres options ici -->
                            </select>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="travaille" name="travaille">
                            <label class="form-check-label" for="travaille">تعمل</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="hijab" name="hijab">
                            <label class="form-check-label" for="hijab">ترتدي الحجاب</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="mariage_divorce" name="mariage_divorce">
                            <label class="form-check-label" for="mariage_divorce">مستعد للزواج من امرأة مطلقة</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="mariage_enfants" name="mariage_enfants">
                            <label class="form-check-label" for="mariage_enfants">مستعد للزواج من امرأة لديها أطفال</label>
                        </div>

                        <!-- Informations personnelles -->
                        <h2>بالنسبة لي</h2>

                        <div class="form-group">
                            <label for="country">البلد</label>
                            <input id="country" type="text" class="form-control" name="country" value="الجزائر" readonly>
                        </div>

                        <div class="form-group">
                            <label for="residence">ولاية الإقامة</label>
                            <select id="residence" class="form-control" name="residence" required>
                                <!-- Options pour les wilayas -->
                                <option value="wilaya1">ولاية 1</option>
                                <option value="wilaya2">ولاية 2</option>
                                <!-- Ajoutez d'autres options ici -->
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="age">العمر</label>
                            <input id="age" type="number" class="form-control" name="age" required>
                        </div>

                        <div class="form-group">
                            <label for="height">الطول (بالسنتيمتر)</label>
                            <input id="height" type="number" class="form-control" name="height" required>
                        </div>

                        <div class="form-group">
                            <label for="weight">الوزن (بالكيلوغرام)</label>
                            <input id="weight" type="number" class="form-control" name="weight" required>
                        </div>

                        <div class="form-group">
                            <label for="hair_color">لون الشعر</label>
                            <input id="hair_color" type="text" class="form-control" name="hair_color" required>
                        </div>

                        <div class="form-group">
                            <label for="eye_color">لون العين</label>
                            <input id="eye_color" type="text" class="form-control" name="eye_color" required>
                        </div>

                        <div class="form-group">
                            <label for="marital_status">الحالة العائلية</label>
                            <select id="marital_status" class="form-control" name="marital_status" required>
                                <!-- Options pour la situation matrimoniale -->
                                <option value="أعزب">أعزب</option>
                                <option value="متزوج">متزوج</option>
                                <!-- Ajoutez d'autres options ici -->
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="children_count">عدد الأطفال حاليًا</label>
                            <input id="children_count" type="number" class="form-control" name="children_count" min="0" max="12" required>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="fertility" name="fertility">
                            <label class="form-check-label" for="fertility">الإنجاب</label>
                        </div>

                        <div class="form-group">
                            <label for="education_level">المستوى التعليمي</label>
                            <select id="education_level" class="form-control" name="education_level" required>
                                <!-- Options pour le niveau d'éducation -->
                                <option value="بداية التعليم">بداية التعليم</option>
                                <option value="متوسط">متوسط</option>
                                <!-- Ajoutez d'autres options ici -->
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="occupation">المهنة</label>
                            <select id="occupation" class="form-control" name="occupation" required>
                                <!-- Options pour la profession -->
                                <option value="مهنة1">مهنة 1</option>
                                <option value="مهنة2">مهنة 2</option>
                                <!-- Ajoutez d'autres options ici -->
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="employment_type">نوع عقد العمل</label>
                            <select id="employment_type" class="form-control" name="employment_type" required>
                                <!-- Options pour le type de contrat de travail -->
                                <option value="محدود المدى">محدود المدى</option>
                                <option value="غير محدود المدى">غير محدود المدى</option>
                                <!-- Ajoutez d'autres options ici -->
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="monthly_income">الدخل الشهري</label>
                            <select id="monthly_income" class="form-control" name="monthly_income" required>
                                <!-- Options pour le revenu mensuel -->
                                <option value="أقل من 5 مليون دينار">أقل من 5 مليون دينار</option>
                                <option value="أكثر من 10 مليون دينار">أكثر من 10 مليون دينار</option>
                                <!-- Ajoutez d'autres options ici -->
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="housing">ممتلكات مسكن خاصة أم إيجارها</label>
                            <select id="housing" class="form-control" name="housing" required>
                                <!-- Options pour la propriété de la résidence -->
                                <option value="ممتلكة">ممتلكة</option>
                                <option value="مستأجرة">مستأجرة</option>
                                <!-- Ajoutez d'autres options ici -->
                            </select>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="religious_practices" name="religious_practices">
                            <label class="form-check-label" for="religious_practices">ممارسة الشعائر الدينية الأساسية</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="chronic_illness" name="chronic_illness">
                            <label class="form-check-label" for="chronic_illness">وجود مرض مزمن</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="disability" name="disability">
                            <label class="form-check-label" for="disability">وجود إعاقة</label>
                        </div>

                        <div class="form-group">
                            <label for="email">{{ __('بريد إلكتروني') }}</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="password">{{ __('كلمة السر') }}</label>
                            <input id="password" type="password" class="form-control" name="password" required>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm">{{ __('تأكيد كلمة السر') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            {{ __('سجل') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>