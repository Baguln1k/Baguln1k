<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'changelog' => 'Changelog for easyComm.

1.4.3-pl (19.07.2017)
==============
- Исправлено поведение сниппета ecThreadRating при отсутствующем в базе объекте ecThread
- Убрана лишняя инициализация pdoTools в сниппетах

1.4.2-pl (04.07.2017)
==============
- Значения по-умолчанию для некоторых полей сообщения (thread) и цепочки (resource, name) при создании из панели управления
- Возможность указать значение рейтинга по-умолчанию при создании нового сообщения в панели управления (просто создайте настройку ec_rating_default = X)

1.4.0-pl (19.06.2017)
==============
- Новый параметр messages у сниппета ecMessages, в котором можно указать id конкретных сообщений

1.3.3-pl (19.06.2017)
==============
- В тексте письма менеджеру адрес панели управления теперь берется из системных настроек

1.3.2-pl (29.05.2017)
==============
- Добавлена поддержка Google ReCaptcha v2 для защиты от спама

1.3.1-pl (17.03.2017)
==============
- Графическое отображение рейтинга в админке, с возможностью отключения

1.3.0-pl (25.01.2017)
==============
- Добавлен en лексикон (спасибо Grigoriy Kolenko)
- Переключение контекста при запросах к action.php
- idx в сниппете ecMessages теперь привязан к idx от pdoTools, нумерация идет с 1, а не с 0
- Процессоры редактирования/удаления объектов теперь наследуются от modObjectUpdateProcessor и modObjectRemoveProcessor
- Добавлены события OnBeforeEcThreadRemove и OnEcThreadRemove

1.2.9-pl (19.01.2017)
==============
- Исправлена ошибка с пользовательским leftJoin в ecMessages

1.2.8-pl
==============
- Отключена перезапись чанков в скрипте установки
- Добавлен параметр resourceFields в сниппет ecMessages

1.2.7-pl
==============
- Добавлен параметр mailManager к сниппету ecForm

1.2.6-pl
==============
- Добавлена колонка Ресурс в списке сообщений в панели управления

1.2.5-pl
==============
- Поддержка Gravatar в сниппете ecMessages

1.2.4-pl
==============
- В сниппете ecForm для отоборажения чанка формы теперь используется $pdoTools
- Исправлена критическая ошибка при указании параметра tplWrapper в сниппете ecMessages
- Добавлена функция "Посмотреть сообщение на сайте" в административной части

1.2.3-pl1
==============
- Исправлен баг при использовании tplWrapper, связанный с передачей данных в чанк, где фигурировала переменная $thread

1.2.3-pl
==============
- Добавлен сниппет ecMessagesCount

1.2.2-pl
==============
- Добавлен параметр $threads к сниппету ecMessages, позволяющий выводить сообщения из нескольких цепочек

1.2.1-pl
==============
- Добавлена настройка auto_reply_author - автоматическое заполнение поля Автор ответа

1.2.0-pl
==============
- Добавлены вспомогательные методы в utils.js для работы с дополнительными полями-изображениями
- События на действия с сообщениями для возможности написания плагинов

1.1.3-pl
==============
- Добавлен параметр tplEmpty к сниппету cMessages

1.1.2-pl
==============
- Ошибка с непрописанным formId в html
- Замена $ на jQuery для избежания проблем с jQuery.noConflict()

1.1.1-pl
==============
- Возможность автопубликации сообщений
- Поддержка авторизованных пользователей в сниппете ecForm

1.1.0-pl
==============
- Устранена ошибка при редактировании цепочки сообщений

1.1.0-beta
==============
- Исправлено форматирование даты в окне редактирования сообщения
- Возврат потерянного поля thread_name в списке сообщений

1.1.0-beta
==============
- Возможность настройки отображения списка колонок при просмотре списка сообщений и цепочек сообщений
- Возможность настройки отображение разметкой окна редактировани сообщения и цепочки
- Интегрирована система плагинов для добавления полей сообщениям (ecMessage)

1.0.4-beta2
==============
- Добавлено поле IP адрес к объекту ecMessage
- Добавлена Оценка к Сообщениям
- Автоматический подсчет средней Оценки для Цепочки по 2-м алгоритмам: Средняя и Вильсон

1.0.2-beta1
==============
- Исправлена критическая ошибка, возникающая при установке пакета

1.0.0-beta
==============
- First version',
    'license' => 'GNU GENERAL PUBLIC LICENSE
   Version 2, June 1991
--------------------------

Copyright (C) 1989, 1991 Free Software Foundation, Inc.
59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

Everyone is permitted to copy and distribute verbatim copies
of this license document, but changing it is not allowed.

Preamble
--------

  The licenses for most software are designed to take away your
freedom to share and change it.  By contrast, the GNU General Public
License is intended to guarantee your freedom to share and change free
software--to make sure the software is free for all its users.  This
General Public License applies to most of the Free Software
Foundation\'s software and to any other program whose authors commit to
using it.  (Some other Free Software Foundation software is covered by
the GNU Library General Public License instead.)  You can apply it to
your programs, too.

  When we speak of free software, we are referring to freedom, not
price.  Our General Public Licenses are designed to make sure that you
have the freedom to distribute copies of free software (and charge for
this service if you wish), that you receive source code or can get it
if you want it, that you can change the software or use pieces of it
in new free programs; and that you know you can do these things.

  To protect your rights, we need to make restrictions that forbid
anyone to deny you these rights or to ask you to surrender the rights.
These restrictions translate to certain responsibilities for you if you
distribute copies of the software, or if you modify it.

  For example, if you distribute copies of such a program, whether
gratis or for a fee, you must give the recipients all the rights that
you have.  You must make sure that they, too, receive or can get the
source code.  And you must show them these terms so they know their
rights.

  We protect your rights with two steps: (1) copyright the software, and
(2) offer you this license which gives you legal permission to copy,
distribute and/or modify the software.

  Also, for each author\'s protection and ours, we want to make certain
that everyone understands that there is no warranty for this free
software.  If the software is modified by someone else and passed on, we
want its recipients to know that what they have is not the original, so
that any problems introduced by others will not reflect on the original
authors\' reputations.

  Finally, any free program is threatened constantly by software
patents.  We wish to avoid the danger that redistributors of a free
program will individually obtain patent licenses, in effect making the
program proprietary.  To prevent this, we have made it clear that any
patent must be licensed for everyone\'s free use or not licensed at all.

  The precise terms and conditions for copying, distribution and
modification follow.


GNU GENERAL PUBLIC LICENSE
TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION
---------------------------------------------------------------

  0. This License applies to any program or other work which contains
a notice placed by the copyright holder saying it may be distributed
under the terms of this General Public License.  The "Program", below,
refers to any such program or work, and a "work based on the Program"
means either the Program or any derivative work under copyright law:
that is to say, a work containing the Program or a portion of it,
either verbatim or with modifications and/or translated into another
language.  (Hereinafter, translation is included without limitation in
the term "modification".)  Each licensee is addressed as "you".

Activities other than copying, distribution and modification are not
covered by this License; they are outside its scope.  The act of
running the Program is not restricted, and the output from the Program
is covered only if its contents constitute a work based on the
Program (independent of having been made by running the Program).
Whether that is true depends on what the Program does.

  1. You may copy and distribute verbatim copies of the Program\'s
source code as you receive it, in any medium, provided that you
conspicuously and appropriately publish on each copy an appropriate
copyright notice and disclaimer of warranty; keep intact all the
notices that refer to this License and to the absence of any warranty;
and give any other recipients of the Program a copy of this License
along with the Program.

You may charge a fee for the physical act of transferring a copy, and
you may at your option offer warranty protection in exchange for a fee.

  2. You may modify your copy or copies of the Program or any portion
of it, thus forming a work based on the Program, and copy and
distribute such modifications or work under the terms of Section 1
above, provided that you also meet all of these conditions:

    a) You must cause the modified files to carry prominent notices
    stating that you changed the files and the date of any change.

    b) You must cause any work that you distribute or publish, that in
    whole or in part contains or is derived from the Program or any
    part thereof, to be licensed as a whole at no charge to all third
    parties under the terms of this License.

    c) If the modified program normally reads commands interactively
    when run, you must cause it, when started running for such
    interactive use in the most ordinary way, to print or display an
    announcement including an appropriate copyright notice and a
    notice that there is no warranty (or else, saying that you provide
    a warranty) and that users may redistribute the program under
    these conditions, and telling the user how to view a copy of this
    License.  (Exception: if the Program itself is interactive but
    does not normally print such an announcement, your work based on
    the Program is not required to print an announcement.)

These requirements apply to the modified work as a whole.  If
identifiable sections of that work are not derived from the Program,
and can be reasonably considered independent and separate works in
themselves, then this License, and its terms, do not apply to those
sections when you distribute them as separate works.  But when you
distribute the same sections as part of a whole which is a work based
on the Program, the distribution of the whole must be on the terms of
this License, whose permissions for other licensees extend to the
entire whole, and thus to each and every part regardless of who wrote it.

Thus, it is not the intent of this section to claim rights or contest
your rights to work written entirely by you; rather, the intent is to
exercise the right to control the distribution of derivative or
collective works based on the Program.

In addition, mere aggregation of another work not based on the Program
with the Program (or with a work based on the Program) on a volume of
a storage or distribution medium does not bring the other work under
the scope of this License.

  3. You may copy and distribute the Program (or a work based on it,
under Section 2) in object code or executable form under the terms of
Sections 1 and 2 above provided that you also do one of the following:

    a) Accompany it with the complete corresponding machine-readable
    source code, which must be distributed under the terms of Sections
    1 and 2 above on a medium customarily used for software interchange; or,

    b) Accompany it with a written offer, valid for at least three
    years, to give any third party, for a charge no more than your
    cost of physically performing source distribution, a complete
    machine-readable copy of the corresponding source code, to be
    distributed under the terms of Sections 1 and 2 above on a medium
    customarily used for software interchange; or,

    c) Accompany it with the information you received as to the offer
    to distribute corresponding source code.  (This alternative is
    allowed only for noncommercial distribution and only if you
    received the program in object code or executable form with such
    an offer, in accord with Subsection b above.)

The source code for a work means the preferred form of the work for
making modifications to it.  For an executable work, complete source
code means all the source code for all modules it contains, plus any
associated interface definition files, plus the scripts used to
control compilation and installation of the executable.  However, as a
special exception, the source code distributed need not include
anything that is normally distributed (in either source or binary
form) with the major components (compiler, kernel, and so on) of the
operating system on which the executable runs, unless that component
itself accompanies the executable.

If distribution of executable or object code is made by offering
access to copy from a designated place, then offering equivalent
access to copy the source code from the same place counts as
distribution of the source code, even though third parties are not
compelled to copy the source along with the object code.

  4. You may not copy, modify, sublicense, or distribute the Program
except as expressly provided under this License.  Any attempt
otherwise to copy, modify, sublicense or distribute the Program is
void, and will automatically terminate your rights under this License.
However, parties who have received copies, or rights, from you under
this License will not have their licenses terminated so long as such
parties remain in full compliance.

  5. You are not required to accept this License, since you have not
signed it.  However, nothing else grants you permission to modify or
distribute the Program or its derivative works.  These actions are
prohibited by law if you do not accept this License.  Therefore, by
modifying or distributing the Program (or any work based on the
Program), you indicate your acceptance of this License to do so, and
all its terms and conditions for copying, distributing or modifying
the Program or works based on it.

  6. Each time you redistribute the Program (or any work based on the
Program), the recipient automatically receives a license from the
original licensor to copy, distribute or modify the Program subject to
these terms and conditions.  You may not impose any further
restrictions on the recipients\' exercise of the rights granted herein.
You are not responsible for enforcing compliance by third parties to
this License.

  7. If, as a consequence of a court judgment or allegation of patent
infringement or for any other reason (not limited to patent issues),
conditions are imposed on you (whether by court order, agreement or
otherwise) that contradict the conditions of this License, they do not
excuse you from the conditions of this License.  If you cannot
distribute so as to satisfy simultaneously your obligations under this
License and any other pertinent obligations, then as a consequence you
may not distribute the Program at all.  For example, if a patent
license would not permit royalty-free redistribution of the Program by
all those who receive copies directly or indirectly through you, then
the only way you could satisfy both it and this License would be to
refrain entirely from distribution of the Program.

If any portion of this section is held invalid or unenforceable under
any particular circumstance, the balance of the section is intended to
apply and the section as a whole is intended to apply in other
circumstances.

It is not the purpose of this section to induce you to infringe any
patents or other property right claims or to contest validity of any
such claims; this section has the sole purpose of protecting the
integrity of the free software distribution system, which is
implemented by public license practices.  Many people have made
generous contributions to the wide range of software distributed
through that system in reliance on consistent application of that
system; it is up to the author/donor to decide if he or she is willing
to distribute software through any other system and a licensee cannot
impose that choice.

This section is intended to make thoroughly clear what is believed to
be a consequence of the rest of this License.

  8. If the distribution and/or use of the Program is restricted in
certain countries either by patents or by copyrighted interfaces, the
original copyright holder who places the Program under this License
may add an explicit geographical distribution limitation excluding
those countries, so that distribution is permitted only in or among
countries not thus excluded.  In such case, this License incorporates
the limitation as if written in the body of this License.

  9. The Free Software Foundation may publish revised and/or new versions
of the General Public License from time to time.  Such new versions will
be similar in spirit to the present version, but may differ in detail to
address new problems or concerns.

Each version is given a distinguishing version number.  If the Program
specifies a version number of this License which applies to it and "any
later version", you have the option of following the terms and conditions
either of that version or of any later version published by the Free
Software Foundation.  If the Program does not specify a version number of
this License, you may choose any version ever published by the Free Software
Foundation.

  10. If you wish to incorporate parts of the Program into other free
programs whose distribution conditions are different, write to the author
to ask for permission.  For software which is copyrighted by the Free
Software Foundation, write to the Free Software Foundation; we sometimes
make exceptions for this.  Our decision will be guided by the two goals
of preserving the free status of all derivatives of our free software and
of promoting the sharing and reuse of software generally.

NO WARRANTY
-----------

  11. BECAUSE THE PROGRAM IS LICENSED FREE OF CHARGE, THERE IS NO WARRANTY
FOR THE PROGRAM, TO THE EXTENT PERMITTED BY APPLICABLE LAW.  EXCEPT WHEN
OTHERWISE STATED IN WRITING THE COPYRIGHT HOLDERS AND/OR OTHER PARTIES
PROVIDE THE PROGRAM "AS IS" WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESSED
OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE.  THE ENTIRE RISK AS
TO THE QUALITY AND PERFORMANCE OF THE PROGRAM IS WITH YOU.  SHOULD THE
PROGRAM PROVE DEFECTIVE, YOU ASSUME THE COST OF ALL NECESSARY SERVICING,
REPAIR OR CORRECTION.

  12. IN NO EVENT UNLESS REQUIRED BY APPLICABLE LAW OR AGREED TO IN WRITING
WILL ANY COPYRIGHT HOLDER, OR ANY OTHER PARTY WHO MAY MODIFY AND/OR
REDISTRIBUTE THE PROGRAM AS PERMITTED ABOVE, BE LIABLE TO YOU FOR DAMAGES,
INCLUDING ANY GENERAL, SPECIAL, INCIDENTAL OR CONSEQUENTIAL DAMAGES ARISING
OUT OF THE USE OR INABILITY TO USE THE PROGRAM (INCLUDING BUT NOT LIMITED
TO LOSS OF DATA OR DATA BEING RENDERED INACCURATE OR LOSSES SUSTAINED BY
YOU OR THIRD PARTIES OR A FAILURE OF THE PROGRAM TO OPERATE WITH ANY OTHER
PROGRAMS), EVEN IF SUCH HOLDER OR OTHER PARTY HAS BEEN ADVISED OF THE
POSSIBILITY OF SUCH DAMAGES.

---------------------------
END OF TERMS AND CONDITIONS',
    'readme' => '--------------------
easyComm
--------------------
Author: Alexey Naumov <alexei@createit.ru>
--------------------

Компонент предназначен для создания на сайтах таких модулей, как отзывы, комментарии, вопросы пользователей.

Название easyComm произошло от Easy Communication, или Easy Comments, кому как больше нравится.

Компонент позволяет пользователям сайта через специальную форму оставить свое сообщение/отзыв/вопрос,
а администратор увидит их в панели управления сайтом, сможет опубликовать сообщение,
удалить его или оставить свой ответ.',
    'chunks' => 
    array (
      'tpl.ecMessages.Row' => '<div id="ec-[[+thread_name]]-message-[[+id]]" class="ec-message">
    <p><strong>[[+user_name]]</strong><span class="ec-message__date"> [[+date:dateAgo]]</span></p>
    <div class="ec-stars">
        <span class="rating-[[+rating]]"></span>
    </div>
    <p>[[+text]]</p>
    [[+reply_text]]
</div>

<!--ec_reply_text <div class="ec-message__reply">[[+reply_author]]<p>[[+reply_text]]</p></div>-->
<!--ec_reply_author <p><strong>[[+reply_author]]</strong></p>-->',
      'tpl.ecForm' => '<h2>[[%ec_fe_message_add]]</h2>
<form class="form well ec-form" method="post" role="form" id="ec-form-[[+fid]]" data-fid="[[+fid]]" action="">
    <input type="hidden" name="thread" value="[[+thread]]">

    <div class="form-group ec-antispam">
        <label for="ec-[[+antispam_field]]-[[+fid]]" class="control-label">[[%ec_fe_message_antismap]]</label>
        <input type="text" name="[[+antispam_field]]" class="form-control" id="ec-[[+antispam_field]]-[[+fid]]" value="" />
    </div>

    <div class="form-group">
        <label for="ec-user_name-[[+fid]]" class="control-label">[[%ec_fe_message_user_name]]</label>
        <input type="text" name="user_name" class="form-control" id="ec-user_name-[[+fid]]" value="[[+user_name]]" />
        <span class="ec-error help-block" id="ec-user_name-error-[[+fid]]"></span>
    </div>

    <div class="form-group">
        <label for="ec-user_email-[[+fid]]" class="control-label">[[%ec_fe_message_user_email]]</label>
        <input type="text" name="user_email" class="form-control" id="ec-user_email-[[+fid]]" value="[[+user_email]]" />
        <span class="ec-error help-block" id="ec-user_email-error-[[+fid]]"></span>
    </div>

    <div class="form-group">
        <label for="ec-user_contacts-[[+fid]]" class="control-label">[[%ec_fe_message_user_contacts]]</label>
        <input type="text" name="user_contacts" class="form-control" id="ec-user_contacts-[[+fid]]" value="[[+user_contacts]]" />
        <span class="ec-error help-block" id="ec-user_contacts-error-[[+fid]]"></span>
    </div>

    <div class="form-group">
        <label for="ec-subject-[[+fid]]" class="control-label">[[%ec_fe_message_subject]]</label>
        <input type="text" name="subject" class="form-control" id="ec-subject-[[+fid]]" value="[[+subject]]" />
        <span class="ec-error help-block" id="ec-subject-error-[[+fid]]"></span>
    </div>

    <div class="form-group">
        <label for="ec-rating-[[+fid]]" class="control-label">[[%ec_fe_message_rating]]</label>
        <input type="hidden" name="rating" id="ec-rating-[[+fid]]" value="[[+rating]]" />
        <div class="ec-rating ec-clearfix" data-storage-id="ec-rating-[[+fid]]">
            <div class="ec-rating-stars">
                <span data-rating="1" data-description="[[%ec_fe_message_rating_1]]"></span>
                <span data-rating="2" data-description="[[%ec_fe_message_rating_2]]"></span>
                <span data-rating="3" data-description="[[%ec_fe_message_rating_3]]"></span>
                <span data-rating="4" data-description="[[%ec_fe_message_rating_4]]"></span>
                <span data-rating="5" data-description="[[%ec_fe_message_rating_5]]"></span>
            </div>
            <div class="ec-rating-description">[[%ec_fe_message_rating_0]]</div>
        </div>
        <span class="ec-error help-block" id="ec-rating-error-[[+fid]]"></span>
    </div>

    <div class="form-group">
        <label for="ec-text-[[+fid]]" class="control-label">[[%ec_fe_message_text]]</label>
        <textarea type="text" name="text" class="form-control" rows="5" id="ec-text-[[+fid]]">[[+text]]</textarea>
        <span class="ec-error help-block" id="ec-text-error-[[+fid]]"></span>
    </div>

    [[+recaptcha]]

    <div class="form-actions">
        <input type="submit" class="btn btn-primary" name="send" value="[[%ec_fe_send]]" />
    </div>
</form>
<div id="ec-form-success-[[+fid]]"></div>',
      'tpl.ecForm.ReCaptcha' => '<div class="form-group">
    <div class="ec-captcha" id="ec-captcha-[[+fid]]"></div>
    <span class="ec-error help-block" id="ec-captcha-error-[[+fid]]"></span>
</div>',
      'tpl.ecForm.Success' => '<div class="alert alert-success" role="alert">
    [[%ec_fe_send_success]]
</div>',
      'tpl.ecForm.New.Email.User' => 'Здравствуйте, [[+user_name]]!
<br />
Вы оставили сообщение на сайте [[++site_url]]:
<br />
<br />
<div style="white-space:pre;background: #f0f0f0;padding: 10px;border: solid 1px #eee;">[[+text]]</div>
<br /><br />
Ваше сообщение будет опубликовано после проверки администратором.
<br />
<br />
С уважением, [[++site_name]].',
      'tpl.ecForm.New.Email.Manager' => 'На сайте [[++site_url]] было оставлено новое сообщение:
<br />
<br />
Автор: <span style="font-weight: bold">[[+user_name]]</span>
<br/>
Электронная почта: <span style="font-weight: bold">[[+user_email]]</span>
<br/>
Контактная информация: <span style="font-weight: bold">[[+user_contacts]]</span>
<br/>
<br/>
Тема сообщения: <span style="font-weight: bold">[[+subject]]</span>
<br/>
Оценка: <span style="font-weight: bold">[[+rating]]</span>
<br/>
Текст сообщения:
<br/>
<br/>
<div style="white-space:pre;background: #f0f0f0;padding: 10px;border: solid 1px #eee;">[[+text]]</div>
<br /><br />
Сообщение было оставлено на странице <a target="_blank" href="[[~[[+resource_id]]?scheme=`full`]]">[[+resource_pagetitle]]</a>
<br />
<br />
<a target="_blank" href="[[+site_manager_url]]?a=resource/update&id=[[+resource_id]]">Опубликовать или ответить на сообщение &gt;</a>',
      'tpl.ecForm.Update.Email.User' => 'Здравствуйте, [[+user_name]]!
<br />
Вы оставляли сообщение на сайте [[++site_url]]:
<br />
<br />
<div style="white-space:pre;background: #f0f0f0;padding: 10px;border: solid 1px #eee;">[[+text]]</div>
<br /><br />
[[+no_reply_and_published]][[+reply_and_published]][[+reply_and_not_published]]
<br />
<br />
С уважением, [[++site_name]].

<!--ec_no_reply_and_published
Ваше сообщение было опубликовано. Вы можете его просмотреть <a href="[[~[[+resource_id]]? &scheme=`full`]]#message-[[+id]]">здесь</a>.
-->
<!--ec_reply_and_published
[[+reply_author]]<br />
<br />
<div style="white-space:pre;background: #f0f0f0;padding: 10px;border: solid 1px #eee;">[[+reply_text]]</div>
<br />
Ваше сообщение с ответом на него опубликовано <a href="[[~[[+resource_id]]? &scheme=`full`]]#message-[[+id]]">здесь</a>.
-->
<!--ec_reply_and_not_published
[[+reply_author]]<br />
<br />
<div style="white-space:pre;background: #f0f0f0;padding: 10px;border: solid 1px #eee;">[[+reply_text]]</div>
-->

<!--ec_reply_author <span style="font-weight:bold;">[[+reply_author]]</span> ответил на ваше сообщение:-->
<!--ec_!reply_author На ваше сообщение дан ответ:-->',
      'tpl.ecThreadRating' => '<div class="ec-stars" title="[[+rating_wilson]]">
    <span style="width: [[+rating_wilson_percent]]%"></span>
</div>',
    ),
    'setup-options' => 'easycomm-1.4.3-pl/setup-options.php',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => '50dcc548a35aa7bc50baaab8150bc98f',
      'native_key' => 'easycomm',
      'filename' => 'modNamespace/652510707f35da00caee8a45370e2603.vehicle',
      'namespace' => 'easycomm',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7c0e5466c4ab32e07a2bd193c5080142',
      'native_key' => 'ec_show_templates',
      'filename' => 'modSystemSetting/ef37d6140cb5e811292a8425346f609c.vehicle',
      'namespace' => 'easycomm',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b788f84089a8ea329d2378db6ae7f52b',
      'native_key' => 'ec_show_resources',
      'filename' => 'modSystemSetting/d3e402e07566646f877532ab2b66d9f5.vehicle',
      'namespace' => 'easycomm',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'bbbfccb3d3254a78e7e1524069702c7a',
      'native_key' => 'ec_frontend_css',
      'filename' => 'modSystemSetting/11272aff4200bbca46993325ad1e5ba3.vehicle',
      'namespace' => 'easycomm',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '44ed69e1ff16cf170efcba8131869156',
      'native_key' => 'ec_frontend_js',
      'filename' => 'modSystemSetting/5094a73bf459fe63ab9a805e0411cd60.vehicle',
      'namespace' => 'easycomm',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'bb918fac2160c154afbe8b42e9441994',
      'native_key' => 'ec_thread_grid_fields',
      'filename' => 'modSystemSetting/503a8ac910df24b5c672155caa6a7ca4.vehicle',
      'namespace' => 'easycomm',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '35afc7b6064695322d29feb2a8971212',
      'native_key' => 'ec_thread_window_fields',
      'filename' => 'modSystemSetting/e1e9c25798f584cf285718525c21e8a4.vehicle',
      'namespace' => 'easycomm',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b75fb6c517254b17b29f926397b7fc7b',
      'native_key' => 'ec_message_grid_fields',
      'filename' => 'modSystemSetting/9b99f552a1d7a55b0d94c07de9e164d9.vehicle',
      'namespace' => 'easycomm',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '70c9994c773235b0baedd96fd759440b',
      'native_key' => 'ec_message_window_layout',
      'filename' => 'modSystemSetting/60284eee6fd148e4b19cd217cc2ae064.vehicle',
      'namespace' => 'easycomm',
    ),
    9 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f88b5fadb6750ea09d8b1d7b9669f5ac',
      'native_key' => 'ec_auto_reply_author',
      'filename' => 'modSystemSetting/c9d1bb0b98167a8251e0732b8dfd704d.vehicle',
      'namespace' => 'easycomm',
    ),
    10 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '182be5d534736559b5543f357385c950',
      'native_key' => 'ec_mail_notify_user',
      'filename' => 'modSystemSetting/736063841ecdf23107959d5e2d31fa20.vehicle',
      'namespace' => 'easycomm',
    ),
    11 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1e8ac1cecc8d056194da5dbb8d359cd0',
      'native_key' => 'ec_mail_notify_manager',
      'filename' => 'modSystemSetting/d2e7bcab07620ce2f10b72e8d808d8ac.vehicle',
      'namespace' => 'easycomm',
    ),
    12 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '40d7fcd88d167b113329e80b7a74aeb6',
      'native_key' => 'ec_mail_new_subject_manager',
      'filename' => 'modSystemSetting/1997660eb4bc40127f1c384446d45057.vehicle',
      'namespace' => 'easycomm',
    ),
    13 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'eea9b680b5830b9684f38c7fe4e77361',
      'native_key' => 'ec_mail_new_subject_user',
      'filename' => 'modSystemSetting/6059e19bfb0bd11aabccdeff6365c3ae.vehicle',
      'namespace' => 'easycomm',
    ),
    14 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'eb90ece8df374e3ed01217b44d1eb35f',
      'native_key' => 'ec_mail_update_subject_user',
      'filename' => 'modSystemSetting/87a4657ce4698182abfc28de26dc150b.vehicle',
      'namespace' => 'easycomm',
    ),
    15 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'aad7d35c0c8ab72483067e36d77ccb66',
      'native_key' => 'ec_mail_manager',
      'filename' => 'modSystemSetting/7d7e4c19d73fe3fe21005d3521ac5df3.vehicle',
      'namespace' => 'easycomm',
    ),
    16 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'bb3d5a665b9a508ea9831cbebfd86988',
      'native_key' => 'ec_mail_from',
      'filename' => 'modSystemSetting/8f33cb5dea3611bc002bdc5fd7a27087.vehicle',
      'namespace' => 'easycomm',
    ),
    17 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '088d7b9e341573fec4b6b07550c5bb6c',
      'native_key' => 'ec_mail_from_name',
      'filename' => 'modSystemSetting/1e8c1068ac48ae563de8d15e087359e6.vehicle',
      'namespace' => 'easycomm',
    ),
    18 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6c5e16da1e169fc421f4a5b6bd92119c',
      'native_key' => 'ec_rating_max',
      'filename' => 'modSystemSetting/829b416d1c263228940867a26f191580.vehicle',
      'namespace' => 'easycomm',
    ),
    19 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '83c3ced975ef7b2b4cd1355bcc918e35',
      'native_key' => 'ec_rating_wilson_confidence',
      'filename' => 'modSystemSetting/49924a8cd1f5c27326a5ff6e5077add8.vehicle',
      'namespace' => 'easycomm',
    ),
    20 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '609411f2d094af778630d22167ea4627',
      'native_key' => 'ec_rating_visual_editor',
      'filename' => 'modSystemSetting/9c26a26ac253b4d9c61bc3175be339ca.vehicle',
      'namespace' => 'easycomm',
    ),
    21 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'bf58f2847183e6cf9ec0671e0655ed0b',
      'native_key' => 'ec_gravatar_size',
      'filename' => 'modSystemSetting/13e6a160947cec60e51ef4ecc74947f9.vehicle',
      'namespace' => 'easycomm',
    ),
    22 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7ca4d1234eb6c0253bc0b8e193b2f8f4',
      'native_key' => 'ec_gravatar_default',
      'filename' => 'modSystemSetting/d428325dd3833b6ac1eeda564dbc5937.vehicle',
      'namespace' => 'easycomm',
    ),
    23 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'cfe66d18acea45872ffd8a9cd82427a3',
      'native_key' => 'ec_captcha_enable',
      'filename' => 'modSystemSetting/5dd56c815f7e5bb943f03dc53609108f.vehicle',
      'namespace' => 'easycomm',
    ),
    24 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8a124a4ea834dc36677546891dbea933',
      'native_key' => 'ec_recaptcha2_api',
      'filename' => 'modSystemSetting/e86264c7f1da76c82264fda5a04ca608.vehicle',
      'namespace' => 'easycomm',
    ),
    25 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '11223bcac7617fb6ece6a25b6469edeb',
      'native_key' => 'ec_recaptcha2_site_key',
      'filename' => 'modSystemSetting/40cda2ff2fe55a81de1ea4a855bda5d9.vehicle',
      'namespace' => 'easycomm',
    ),
    26 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'fda5ade68242c4026f086abd87bc7909',
      'native_key' => 'ec_recaptcha2_secret_key',
      'filename' => 'modSystemSetting/72f2278315407318fb46f5da558964f2.vehicle',
      'namespace' => 'easycomm',
    ),
    27 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '0f5259e5b5c5560e13bacf40a23ce1e0',
      'native_key' => 'OnBeforeEcThreadRemove',
      'filename' => 'modEvent/1c7b36b373a071428dff6b3812912dd5.vehicle',
      'namespace' => 'easycomm',
    ),
    28 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '9842950d80112d64bf35ebe537bf9267',
      'native_key' => 'OnEcThreadRemove',
      'filename' => 'modEvent/3482c063fba14eafff2d9b4b596cdc5d.vehicle',
      'namespace' => 'easycomm',
    ),
    29 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'c4ed404cead1462b75035167e15be44b',
      'native_key' => 'OnBeforeEcMessageSave',
      'filename' => 'modEvent/c60ea92dd2a61bece0e95e55737fc71d.vehicle',
      'namespace' => 'easycomm',
    ),
    30 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'af55b213db21b0140730f77823a93648',
      'native_key' => 'OnEcMessageSave',
      'filename' => 'modEvent/1de11930606419b231409932118bdef3.vehicle',
      'namespace' => 'easycomm',
    ),
    31 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'ddc18d496735d358a9c3a49c2fa2ddfa',
      'native_key' => 'OnBeforeEcMessagePublish',
      'filename' => 'modEvent/4637fa1bd941b50bec68d4782b403c0a.vehicle',
      'namespace' => 'easycomm',
    ),
    32 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '1ec2c583c27e344ec1ef00c302511701',
      'native_key' => 'OnEcMessagePublish',
      'filename' => 'modEvent/ff09f8844a74dbf8e19074132299cc64.vehicle',
      'namespace' => 'easycomm',
    ),
    33 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '0fef248a96916ff97273d4c494d10201',
      'native_key' => 'OnBeforeEcMessageUnpublish',
      'filename' => 'modEvent/c1b78478a1330cd916afdc1dc1a4e3d5.vehicle',
      'namespace' => 'easycomm',
    ),
    34 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '3ab3db901f9a49988a0c63799d3b7199',
      'native_key' => 'OnEcMessageUnpublish',
      'filename' => 'modEvent/77f11417e101fb9a08184a02fde6ec0e.vehicle',
      'namespace' => 'easycomm',
    ),
    35 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '108c8df5a02325edd26dace6dea604f9',
      'native_key' => 'OnBeforeEcMessageDelete',
      'filename' => 'modEvent/0799ea645f720cca9040b89fa2ac5c7c.vehicle',
      'namespace' => 'easycomm',
    ),
    36 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '6007e0f39fe1dab34ab38dff4652eaec',
      'native_key' => 'OnEcMessageDelete',
      'filename' => 'modEvent/d8a89a6d40412a1b02b5076a9be82322.vehicle',
      'namespace' => 'easycomm',
    ),
    37 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '6059603a80c5bcac460c16e3fcc4b1a9',
      'native_key' => 'OnBeforeEcMessageUndelete',
      'filename' => 'modEvent/2d25ea859a4d6dbe12a3fea31e4b3513.vehicle',
      'namespace' => 'easycomm',
    ),
    38 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'f0e6b78171e9abe4c97c9acad406adf8',
      'native_key' => 'OnEcMessageUndelete',
      'filename' => 'modEvent/a826b92d75694a612e6a3b6c397282f2.vehicle',
      'namespace' => 'easycomm',
    ),
    39 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'ec959c69340ad8f6e70fcd3ffcadbc9b',
      'native_key' => 'OnBeforeEcMessageRemove',
      'filename' => 'modEvent/aa932f2b4da4150f916d631fc3b7c154.vehicle',
      'namespace' => 'easycomm',
    ),
    40 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '7981b5d9840e72cdb93f44a859e03c64',
      'native_key' => 'OnEcMessageRemove',
      'filename' => 'modEvent/a3a84c00699d139220d314fb5148e732.vehicle',
      'namespace' => 'easycomm',
    ),
    41 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMenu',
      'guid' => 'f4c39f64c2da840baaba4da43b885251',
      'native_key' => 'easyComm',
      'filename' => 'modMenu/21d64d34f11b7058b16ab5711300777b.vehicle',
      'namespace' => 'easycomm',
    ),
    42 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => 'b5f9a4463450d3e53b31117dd88adb7e',
      'native_key' => NULL,
      'filename' => 'modCategory/93c81e6bc43ce035c5819aa6c52318e2.vehicle',
      'namespace' => 'easycomm',
    ),
  ),
);