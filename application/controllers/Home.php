<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$es = array(
			'titulo' => 'Stats Rust',
			'navbar1' => 'Home',
			'navbar2' => 'About',
			'navbar3' => 'Changelog',
			'idioma' => 'Idioma',
			'online' => 'Online',
			'offline' => 'Offline',
			'nombre' => 'Nombre',
			'kills' => 'Kills',
			'muertes' => 'Muertes',
			'suicidios' => 'Suicidios',
			'disparos' => 'Disparos',
			'headshots' => 'HeadShots',
			'itemscreados' => 'Items Creados',
			'itemsreparados' => 'Items Reparados',
			'mejoras' => 'Mejoras',
			'explosivos' => 'Explosivos',
			'armasrecargadas' => 'Armas Recargadas',
			'misiles' => 'Misiles',
			'ver' => 'Ver',
			'copy' => 'Copyright'
		   );
		$en = array(
			'titulo' => 'Stats Rust',
			'navbar1' => 'Home',
			'navbar2' => 'About',
			'navbar3' => 'Changelog',
			'idioma' => 'Language',
			'online' => 'Online',
			'offline' => 'Offline',
			'nombre' => 'Name',
			'kills' => 'Kills',
			'muertes' => 'Deaths',
			'suicidios' => 'Suicides',
			'disparos' => 'Shots',
			'headshots' => 'HeadShots',
			'itemscreados' => 'Items Created',
			'itemsreparados' => 'Repaired Items',
			'mejoras' => 'Improvements',
			'explosivos' => 'Explosives',
			'armasrecargadas' => 'Weapons Reloaded',
			'misiles' => 'Missiles',
			'ver' => 'Watch',
			'copy' => 'Copyright'
		   );
		   $ru = array(
			'titulo' => 'Статистика Rust',
			'navbar1' => 'Дом',
			'navbar2' => 'около',
			'navbar3' => 'Журнал изменений',
			'idioma' => 'Язык',
			'online' => 'В сети',
			'offline' => 'Не в сети',
			'nombre' => 'Имя',
			'kills' => 'Убивает',
			'muertes' => 'Летальные исходы',
			'suicidios' => 'Самоубийства',
			'disparos' => 'Выстрелы',
			'headshots' => 'Выстрелы в голову',
			'itemscreados' => 'Созданные элементы',
			'itemsreparados' => 'Отремонтированные товары',
			'mejoras' => 'Улучшения',
			'explosivos' => 'Взрывчатые вещества',
			'armasrecargadas' => 'Оружие перезаряжено',
			'misiles' => 'Ракеты',
			'ver' => 'Смотреть',
			'copy' => 'авторское право'
		   );
		   $ch = array(
			'titulo' => '防锈统计',
			'navbar1' => '住宅',
			'navbar2' => '靠近',
			'navbar3' => '变更记录',
			'idioma' => '语',
			'online' => '在线的',
			'offline' => '离线',
			'nombre' => '姓名',
			'kills' => '杀人',
			'muertes' => '致命结果',
			'suicidios' => '自杀',
			'disparos' => '射门',
			'headshots' => '爆头',
			'itemscreados' => '创建的项目',
			'itemsreparados' => '翻新商品',
			'mejoras' => '改进之处',
			'explosivos' => '炸药',
			'armasrecargadas' => '武器重装',
			'misiles' => '火箭队',
			'ver' => '看',
			'copy' => '版权'
		   );
		   $fr = array(
			'titulo' => 'Stats Rust',
			'navbar1' => 'Accueil',
			'navbar2' => 'Sur',
			'navbar3' => 'Journal des modifications',
			'idioma' => 'Idiome',
			'online' => 'En ligne',
			'offline' => 'Hors ligne',
			'nombre' => 'nom',
			'kills' => 'Tue',
			'muertes' => 'Décès',
			'suicidios' => 'Suicides',
			'disparos' => 'Coups',
			'headshots' => 'Tirs à la tête',
			'itemscreados' => 'Articles créés',
			'itemsreparados' => 'Articles réparés',
			'mejoras' => 'Surclassements',
			'explosivos' => 'Explosifs',
			'armasrecargadas' => 'Armes rechargées',
			'misiles' => 'Missiles',
			'ver' => 'Regarder',
			'copy' => "roits d'auteur"
		   );
		   $al = array(
			'titulo' => 'Statistik Rust',
			'navbar1' => 'Zuhause',
			'navbar2' => 'Über',
			'navbar3' => 'Änderungsprotokoll',
			'idioma' => 'Sprache',
			'online' => 'Online',
			'offline' => 'Offline',
			'nombre' => 'Name',
			'kills' => 'Tötet',
			'muertes' => 'Todesfälle',
			'suicidios' => 'Selbstmorde',
			'disparos' => 'Schüsse',
			'headshots' => 'Kopfschüsse',
			'itemscreados' => 'Elemente erstellt',
			'itemsreparados' => 'Reparierte Artikel',
			'mejoras' => 'Verbesserungen',
			'explosivos' => 'Sprengstoff',
			'armasrecargadas' => 'Nachgeladene Waffen',
			'misiles' => 'Raketen',
			'ver' => 'Sehen',
			'copy' => 'Urheberrechte ©'
		   );
		if($this->session->userdata('idioma') == 'es'){
			$this->load->view('header');
			$this->parser->parse('navbar', $es);  
			$this->parser->parse('home', $es); 
			$this->parser->parse('footer', $es); 
		}elseif($this->session->userdata('idioma') == 'en'){
			$this->load->view('header');
			$this->parser->parse('navbar', $en);  
			$this->parser->parse('home', $en);  
			$this->parser->parse('footer', $en);
		}elseif($this->session->userdata('idioma') == 'ru'){			
			$this->load->view('header');
			$this->parser->parse('navbar', $ru);  
			$this->parser->parse('home', $ru);  
			$this->parser->parse('footer', $ru);
			}elseif($this->session->userdata('idioma') == 'ch'){				
				$this->load->view('header');
				$this->parser->parse('navbar', $ch);  
				$this->parser->parse('home', $ch);  
				$this->parser->parse('footer', $ch);
				}elseif($this->session->userdata('idioma') == 'fr'){				
					$this->load->view('header');
					$this->parser->parse('navbar', $fr);  
					$this->parser->parse('home', $fr);  
					$this->parser->parse('footer', $fr);
					}elseif($this->session->userdata('idioma') == 'al'){				
						$this->load->view('header');
						$this->parser->parse('navbar', $al);  
						$this->parser->parse('home', $al);  
						$this->parser->parse('footer', $al);
						}else{
					$this->load->view('header');
					$this->parser->parse('navbar', $en);  
					$this->parser->parse('home', $en);  
					$this->parser->parse('footer', $en);
		
				}
	}
	public function changelog()
	{
		$es = array(
			'titulo' => 'Stats Rust',
			'navbar1' => 'Home',
			'navbar2' => 'About',
			'navbar3' => 'Changelog',
			'idioma' => 'Idioma',
			'online' => 'Online',
			'offline' => 'Offline',
			'copy' => 'Copyright'
		   );
		$en = array(
			'titulo' => 'Stats Rust',
			'navbar1' => 'Home',
			'navbar2' => 'About',
			'navbar3' => 'Changelog',
			'idioma' => 'Language',
			'online' => 'Online',
			'offline' => 'Offline',
			'copy' => 'Copyright'
		   );
		   $ru = array(
			'titulo' => 'Статистика Rust',
			'navbar1' => 'Дом',
			'navbar2' => 'около',
			'navbar3' => 'Журнал изменений',
			'idioma' => 'Язык',
			'online' => 'В сети',
			'offline' => 'Не в сети',
			'copy' => 'авторское право'
		   );
		   $ch = array(
			'titulo' => '防锈统计',
			'navbar1' => '住宅',
			'navbar2' => '靠近',
			'navbar3' => '变更记录',
			'idioma' => '语',
			'online' => '在线的',
			'offline' => '离线',
			'copy' => '版权'
		   );
		   $fr = array(
			'titulo' => 'Stats Rust',
			'navbar1' => 'Accueil',
			'navbar2' => 'Sur',
			'navbar3' => 'Journal des modifications',
			'idioma' => 'Idiome',
			'online' => 'En ligne',
			'offline' => 'Hors ligne',
			'copy' => "roits d'auteur"
		   );
		   $al = array(
			'titulo' => 'Statistik Rust',
			'navbar1' => 'Zuhause',
			'navbar2' => 'Über',
			'navbar3' => 'Änderungsprotokoll',
			'idioma' => 'Sprache',
			'online' => 'Online',
			'offline' => 'Offline',			
			'copy' => 'Urheberrechte ©'
		   );
		if($this->session->userdata('idioma') == 'es'){
			$this->load->view('header');
			$this->parser->parse('navbar', $es);  
			$this->parser->parse('changelog', $es); 
			$this->parser->parse('footer', $es); 
		}elseif($this->session->userdata('idioma') == 'en'){
			$this->load->view('header');
			$this->parser->parse('navbar', $en);  
			$this->parser->parse('changelog', $en);  
			$this->parser->parse('footer', $en);
		}elseif($this->session->userdata('idioma') == 'ru'){			
			$this->load->view('header');
			$this->parser->parse('navbar', $ru);  
			$this->parser->parse('changelog', $ru);  
			$this->parser->parse('footer', $ru);
			}elseif($this->session->userdata('idioma') == 'ch'){				
				$this->load->view('header');
				$this->parser->parse('navbar', $ch);  
				$this->parser->parse('changelog', $ch);  
				$this->parser->parse('footer', $ch);
				}elseif($this->session->userdata('idioma') == 'fr'){				
					$this->load->view('header');
					$this->parser->parse('navbar', $fr);  
					$this->parser->parse('changelog', $fr);  
					$this->parser->parse('footer', $fr);
					}elseif($this->session->userdata('idioma') == 'al'){				
						$this->load->view('header');
						$this->parser->parse('navbar', $al);  
						$this->parser->parse('changelog', $al);  
						$this->parser->parse('footer', $al);
						}else{
					$this->load->view('header');
					$this->parser->parse('navbar', $en);  
					$this->parser->parse('changelog', $en);  
					$this->parser->parse('footer', $en);
		
				}
	}
	public function about()
	{
		$es = array(
			'titulo' => 'Stats Rust',
			'navbar1' => 'Home',
			'navbar2' => 'About',
			'navbar3' => 'Changelog',
			'idioma' => 'Idioma',
			'online' => 'Online',
			'offline' => 'Offline',
			'copy' => 'Copyright',

			'sobre' => 'Sobre Este Sitio',
			'sobre1' => 'Este Sitio fue desarrollado con la intención de darle una pagina de estadisticas a los servidores de rust de cuba y del mundo',
			'sobre2' => 'Quiero Agredecer a mi amigo',
			'sobre3' => 'por la ayuda brindada en el desarrollo de la pagina',
			'sobre4' => 'Espero seguir desarrollando esta pagina hasta su version 2.0 a medida que pase el tiempo si alguien quiere colaborar con el proyecto o reportar algun bug etc me puede contactar por las redes sociales que dejo al final',
			'sobre5' => 'Espero que les guste y sea de utilidad. Muchas Gracias',
			'sobre6' => 'Fue Desarrollado con',
			'contacto' => 'Contacto del Desarrollador',
			'contacto1' => 'Nombre',
			'contacto2' => 'NickName',
			'contacto3' => 'Pais',
			'contacto4' => 'Ciudad'
		   );
		$en = array(
			'titulo' => 'Stats Rust',
			'navbar1' => 'Home',
			'navbar2' => 'About',
			'navbar3' => 'Changelog',
			'idioma' => 'Language',
			'online' => 'Online',
			'offline' => 'Offline',
			'copy' => 'Copyright',
			
			'sobre' => 'About This Site',
			'sobre1' => 'This Site was developed with the intention of giving a statistics page to the servers of rust of Cuba and the world',
			'sobre2' => 'I want to thank my friend',
			'sobre3' => 'for the help provided in the development of the page',
			'sobre4' => 'I hope to continue developing this page until its version 2.0 as time goes by, if someone wants to collaborate with the project or report a bug, etc., you can contact me through the social networks that I leave at the end',
			'sobre5' => 'I hope you like it and it is useful. Thanks a lot',
			'sobre6' => 'It was developed with',
			'contacto' => 'Developer Contact',
			'contacto1' => 'Name',
			'contacto2' => 'NickName',
			'contacto3' => 'Country',
			'contacto4' => 'City'
		   );
		   $ru = array(
			'titulo' => 'Статистика Rust',
			'navbar1' => 'Дом',
			'navbar2' => 'около',
			'navbar3' => 'Журнал изменений',
			'idioma' => 'Язык',
			'online' => 'В сети',
			'offline' => 'Не в сети',
			'copy' => 'авторское право',
						
			'sobre' => 'Об этом сайте',
			'sobre1' => 'Этот сайт был разработан с целью предоставить страницу статистики серверам ржавчины Кубы и всего мира.',
			'sobre2' => 'Я хочу поблагодарить моего друга',
			'sobre3' => 'за помощь, оказанную в разработке страницы',
			'sobre4' => 'Я надеюсь продолжить разработку этой страницы до ее версии 2.0 по прошествии времени, если кто-то захочет сотрудничать с проектом или сообщить об ошибке и т. Д., Вы можете связаться со мной через социальные сети, которые я оставлю в конце',
			'sobre5' => 'Надеюсь, он вам понравится и будет полезен. Большое спасибо',
			'sobre6' => 'Он был разработан с',
			'contacto' => 'Контакты разработчика',
			'contacto1' => 'Имя',
			'contacto2' => 'NickName',
			'contacto3' => 'Страна',
			'contacto4' => 'Город'
		   );
		   $ch = array(
			'titulo' => '防锈统计',
			'navbar1' => '住宅',
			'navbar2' => '靠近',
			'navbar3' => '变更记录',
			'idioma' => '语',
			'online' => '在线的',
			'offline' => '离线',
			'copy' => '版权',
						
			'sobre' => '关于本网站',
			'sobre1' => '开发本网站的目的是为古巴和世界的锈蚀服务器提供统计页面',
			'sobre2' => '我要感谢我的朋友',
			'sobre3' => '在页面开发中提供的帮助',
			'sobre4' => '我希望继续开发此页面，直到其版本2.0为止。如果有人想与该项目合作或报告错误等，您可以通过我最后留下的社交网络与我联系。',
			'sobre5' => '希望您喜欢它，并且对您有所帮助。非常感谢',
			'sobre6' => '它是与',
			'contacto' => '开发人员联系方式',
			'contacto1' => '姓名',
			'contacto2' => '昵称',
			'contacto3' => '国家',
			'contacto4' => '城市'
		   );
		   $fr = array(
			'titulo' => 'Stats Rust',
			'navbar1' => 'Accueil',
			'navbar2' => 'Sur',
			'navbar3' => 'Journal des modifications',
			'idioma' => 'Idiome',
			'online' => 'En ligne',
			'offline' => 'Hors ligne',
			'copy' => "roits d'auteur",
						
			'sobre' => 'À propos de ce site',
			'sobre1' => 'Ce site a été développé dans le but de donner une page de statistiques aux serveurs de rouille de Cuba et du monde',
			'sobre2' => 'Je veux remercier mon ami',
			'sobre3' => "pour l'aide fournie dans le développement de la page",
			'sobre4' => "J'espère continuer à développer cette page jusqu'à sa version 2.0 au fil du temps, si quelqu'un veut collaborer avec le projet ou signaler un bug, etc., vous pouvez me contacter via les réseaux sociaux que je quitte à la fin",
			'sobre5' => "J'espère que vous l'aimez et que c'est utile. Merci beaucoup",
			'sobre6' => 'Il a été développé avec',
			'contacto' => 'Contact développeur',
			'contacto1' => 'Nom',
			'contacto2' => 'Surnom',
			'contacto3' => 'De campagne',
			'contacto4' => 'Ville'
		   );
		   $al = array(
			'titulo' => 'Statistik Rust',
			'navbar1' => 'Zuhause',
			'navbar2' => 'Über',
			'navbar3' => 'Änderungsprotokoll',
			'idioma' => 'Sprache',
			'online' => 'Online',
			'offline' => 'Offline',			
			'copy' => 'Urheberrechte ©',
						
			'sobre' => 'Über diese Site',
			'sobre1' => 'Diese Seite wurde mit der Absicht entwickelt, den Rostservern Kubas und der Welt eine Statistikseite zur Verfügung zu stellen',
			'sobre2' => 'Ich möchte meinem Freund danken',
			'sobre3' => 'für die Hilfe bei der Entwicklung der Seite',
			'sobre4' => 'Ich hoffe, dass ich diese Seite im Laufe der Zeit bis zur Version 2.0 weiterentwickeln kann. Wenn jemand mit dem Projekt zusammenarbeiten oder einen Fehler melden möchte, können Sie mich über die sozialen Netzwerke kontaktieren, die ich am Ende verlasse',
			'sobre5' => 'Ich hoffe es gefällt euch und es ist nützlich. Danke vielmals',
			'sobre6' => 'Es wurde mit entwickelt',
			'contacto' => 'Entwicklerkontakt',
			'contacto1' => 'Name',
			'contacto2' => 'Spitzname',
			'contacto3' => 'Land',
			'contacto4' => 'Stadt'
		   );
		if($this->session->userdata('idioma') == 'es'){
			$this->load->view('header');
			$this->parser->parse('navbar', $es);  
			$this->parser->parse('about', $es); 
			$this->parser->parse('footer', $es); 
		}elseif($this->session->userdata('idioma') == 'en'){
			$this->load->view('header');
			$this->parser->parse('navbar', $en);  
			$this->parser->parse('about', $en);  
			$this->parser->parse('footer', $en);
		}elseif($this->session->userdata('idioma') == 'ru'){			
			$this->load->view('header');
			$this->parser->parse('navbar', $ru);  
			$this->parser->parse('about', $ru);  
			$this->parser->parse('footer', $ru);
			}elseif($this->session->userdata('idioma') == 'ch'){				
				$this->load->view('header');
				$this->parser->parse('navbar', $ch);  
				$this->parser->parse('about', $ch);  
				$this->parser->parse('footer', $ch);
				}elseif($this->session->userdata('idioma') == 'fr'){				
					$this->load->view('header');
					$this->parser->parse('navbar', $fr);  
					$this->parser->parse('about', $fr);  
					$this->parser->parse('footer', $fr);
					}elseif($this->session->userdata('idioma') == 'al'){				
						$this->load->view('header');
						$this->parser->parse('navbar', $al);  
						$this->parser->parse('about', $al);  
						$this->parser->parse('footer', $al);
						}else{
					$this->load->view('header');
					$this->parser->parse('navbar', $en);  
					$this->parser->parse('about', $en);  
					$this->parser->parse('footer', $en);
		
				}
	}
	public function verusuario()
	{
		$es = array(
			'titulo' => 'Stats Rust',
			'navbar1' => 'Home',
			'navbar2' => 'About',
			'navbar3' => 'Changelog',
			'idioma' => 'Idioma',
			'online' => 'Online',
			'offline' => 'Offline',
			'copy' => 'Copyright',
			'kills' => 'Kills',
			'nombre' => 'Nombre',
			'tiempojugado' => 'Tiempo Jugado',
			'headshots' => 'HeadShots',
			'horas' => 'Horas',
			'efectividaddedisparos' => 'Efectividad de Disparos',
			'ratio' => 'Ratio',
			'recursosmineados' => 'Recursos Mineados',
			'misiles' => 'Misiles',
			'explosivoslanzados' => 'Explosivos Lanzados',
			'volver' => 'Volver',
			'muertes' => 'Muertes',
			'suicidios' => 'Suicidios',
			'madera' => 'Madera',
			'metal' => 'Metal',
			'piedra' => 'Piedra',
			'sulfuro' => 'Sulfuro',
			'grasa' => 'Grasa',
			'carne' => 'Carne',
			'tela' => 'Tela',
			'hueso' => 'Hueso',
			'cuero' => 'Cuero'
		   );
		$en = array(
			'titulo' => 'Stats Rust',
			'navbar1' => 'Home',
			'navbar2' => 'About',
			'navbar3' => 'Changelog',
			'idioma' => 'Language',
			'online' => 'Online',
			'offline' => 'Offline',
			'copy' => 'Copyright',

			'kills' => 'Kills',
			'nombre' => 'Name',
			'tiempojugado' => 'Time Played',
			'headshots' => 'HeadShots',
			'horas' => 'Hours',
			'efectividaddedisparos' => 'Shooting Effectiveness',
			'ratio' => 'Ratio',
			'recursosmineados' => 'Mined Resources',
			'misiles' => 'Missiles',
			'explosivoslanzados' => 'Explosives Released',
			'volver' => 'Return',
			'muertes' => 'Deaths',
			'suicidios' => 'Suicides',
			'madera' => 'Wood',
			'metal' => 'Metal',
			'piedra' => 'Stone',
			'sulfuro' => 'Sulfide',
			'grasa' => 'Grease',
			'carne' => 'Meat',
			'tela' => 'Cloth',
			'hueso' => 'Bone',
			'cuero' => 'Leather'

		   );
		   $ru = array(
			'titulo' => 'Статистика Rust',
			'navbar1' => 'Дом',
			'navbar2' => 'около',
			'navbar3' => 'Журнал изменений',
			'idioma' => 'Язык',
			'online' => 'В сети',
			'offline' => 'Не в сети',
			'copy' => 'авторское право',
						
			'kills' => 'Убивает',
			'nombre' => 'Имя',
			'tiempojugado' => 'Время в игре',
			'headshots' => 'HeadShots',
			'horas' => 'Часы',
			'efectividaddedisparos' => 'Эффективность стрельбы',
			'ratio' => 'Соотношение',
			'recursosmineados' => 'Добытые ресурсы',
			'misiles' => 'Ракеты',
			'explosivoslanzados' => 'Взрывчатка выпущена',
			'volver' => 'Возвращаться',
			'muertes' => 'Летальные исходы',
			'suicidios' => 'Самоубийства',
			'madera' => 'Древесина',
			'metal' => 'Металл',
			'piedra' => 'Камень',
			'sulfuro' => 'Сульфид',
			'grasa' => 'Смазка',
			'carne' => 'Мясо',
			'tela' => 'Ткань',
			'hueso' => 'Кость',
			'cuero' => 'Натуральная кожа'
		   );
		   $ch = array(
			'titulo' => '防锈统计',
			'navbar1' => '住宅',
			'navbar2' => '靠近',
			'navbar3' => '变更记录',
			'idioma' => '语',
			'online' => '在线的',
			'offline' => '离线',
			'copy' => '版权',
			
			'kills' => '杀人',
			'nombre' => '姓名',
			'tiempojugado' => '玩时间',
			'headshots' => '爆头',
			'horas' => '小时',
			'efectividaddedisparos' => '射击效能',
			'ratio' => '比率',
			'recursosmineados' => '开采资源',
			'misiles' => '导弹',
			'explosivoslanzados' => '爆炸物释放',
			'volver' => '返回',
			'muertes' => '死亡人数',
			'suicidios' => '自杀',
			'madera' => '木头',
			'metal' => '金属',
			'piedra' => '石头',
			'sulfuro' => '硫化物',
			'grasa' => '润滑脂',
			'carne' => '肉',
			'tela' => '布',
			'hueso' => '骨',
			'cuero' => '皮革'
		   );
		   $fr = array(
			'titulo' => 'Stats Rust',
			'navbar1' => 'Accueil',
			'navbar2' => 'Sur',
			'navbar3' => 'Journal des modifications',
			'idioma' => 'Idiome',
			'online' => 'En ligne',
			'offline' => 'Hors ligne',
			'copy' => "roits d'auteur",
			
			'kills' => 'Tue',
			'nombre' => 'Nom',
			'tiempojugado' => 'Temps joué',
			'headshots' => 'Tirs à la tête',
			'horas' => 'Les heures',
			'efectividaddedisparos' => 'Efficacité de la prise de vue',
			'ratio' => 'Rapport',
			'recursosmineados' => 'Ressources minées',
			'misiles' => 'Missiles',
			'explosivoslanzados' => 'Explosifs libérés',
			'volver' => 'Revenir',
			'muertes' => 'Décès',
			'suicidios' => 'Suicides',
			'madera' => 'Bois',
			'metal' => 'Métal',
			'piedra' => 'Pierre',
			'sulfuro' => 'Sulfide',
			'grasa' => 'Graisse',
			'carne' => 'Viande',
			'tela' => 'Chiffon',
			'hueso' => 'OS',
			'cuero' => 'Cuir'
		   );
		   $al = array(
			'titulo' => 'Statistik Rust',
			'navbar1' => 'Zuhause',
			'navbar2' => 'Über',
			'navbar3' => 'Änderungsprotokoll',
			'idioma' => 'Sprache',
			'online' => 'Online',
			'offline' => 'Offline',			
			'copy' => 'Urheberrechte ©',
			
			'kills' => 'Tötet',
			'nombre' => 'Name',
			'tiempojugado' => 'Zeit gespielt',
			'headshots' => 'Kopfschüsse',
			'horas' => 'Std',
			'efectividaddedisparos' => 'Aufnahmeeffektivität',
			'ratio' => 'Verhältnis',
			'recursosmineados' => 'Abgebaute Ressourcen',
			'misiles' => 'Raketen',
			'explosivoslanzados' => 'Sprengstoffe freigesetzt',
			'volver' => 'Rückkehr',
			'muertes' => 'Todesfälle',
			'suicidios' => 'Selbstmorde',
			'madera' => 'Holz',
			'metal' => 'Metall',
			'piedra' => 'Stein',
			'sulfuro' => 'Sulfid',
			'grasa' => 'Fett',
			'carne' => 'Fleisch',
			'tela' => 'Stoff',
			'hueso' => 'Knochen',
			'cuero' => 'Leder'
		   );
		if($this->session->userdata('idioma') == 'es'){
			$this->load->view('header');
			$this->parser->parse('navbar', $es);  
			$this->parser->parse('usuario', $es); 
			$this->parser->parse('footer', $es); 
		}elseif($this->session->userdata('idioma') == 'en'){
			$this->load->view('header');
			$this->parser->parse('navbar', $en);  
			$this->parser->parse('usuario', $en);  
			$this->parser->parse('footer', $en);
		}elseif($this->session->userdata('idioma') == 'ru'){			
			$this->load->view('header');
			$this->parser->parse('navbar', $ru);  
			$this->parser->parse('usuario', $ru);  
			$this->parser->parse('footer', $ru);
			}elseif($this->session->userdata('idioma') == 'ch'){				
				$this->load->view('header');
				$this->parser->parse('navbar', $ch);  
				$this->parser->parse('usuario', $ch);  
				$this->parser->parse('footer', $ch);
				}elseif($this->session->userdata('idioma') == 'fr'){				
					$this->load->view('header');
					$this->parser->parse('navbar', $fr);  
					$this->parser->parse('usuario', $fr);  
					$this->parser->parse('footer', $fr);
					}elseif($this->session->userdata('idioma') == 'al'){				
						$this->load->view('header');
						$this->parser->parse('navbar', $al);  
						$this->parser->parse('usuario', $al);  
						$this->parser->parse('footer', $al);
						}else{
					$this->load->view('header');
					$this->parser->parse('navbar', $en);  
					$this->parser->parse('usuario', $en);  
					$this->parser->parse('footer', $en);
		
				}
	}
	public function top()
	{
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('top');
		$this->load->view('footer');
	}
	public function idiomaes()
	{
		$data = [
			'idioma'=> 'es',
		];
		$this->session->set_userdata($data);
		$base_url = base_url();
		header("Location: $base_url");
	}
	public function idiomaen()
	{
		$data = [
			'idioma'=> 'en',
		];
		$this->session->set_userdata($data);
		$base_url = base_url();
		header("Location: $base_url");
	}
	public function idiomaru()
	{
		$data = [
			'idioma'=> 'ru',
		];
		$this->session->set_userdata($data);
		$base_url = base_url();
		header("Location: $base_url");
	}
	public function idiomach()
	{
		$data = [
			'idioma'=> 'ch',
		];
		$this->session->set_userdata($data);
		$base_url = base_url();
		header("Location: $base_url");
	}
	public function idiomafr()
	{
		$data = [
			'idioma'=> 'fr',
		];
		$this->session->set_userdata($data);
		$base_url = base_url();
		header("Location: $base_url");
	}
	public function idiomaal()
	{
		$data = [
			'idioma'=> 'al',
		];
		$this->session->set_userdata($data);
		$base_url = base_url();
		header("Location: $base_url");
	}
	public function errormissing(){
		$this->load->view('header');
		$this->load->view('404');
	}
}
