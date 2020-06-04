<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Contact Chateau - {{ $subject }}</title>
		<style type="text/css">
			/* ----- Custom Font Import ----- */
			@import url(https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic&subset=latin,latin-ext);

			/* ----- Text Styles ----- */
			table{
				font-family: 'Lato', Arial, sans-serif;
				-webkit-font-smoothing: antialiased;
				-moz-font-smoothing: antialiased;
				font-smoothing: antialiased;
			}

			@media only screen and (max-width: 700px){
				.full-width-container{
					padding: 0 !important;
				}

				.container{
					width: 100% !important;
				}

				.header td{
					padding: 30px 15px 30px 15px !important;
				}
				
				.sub-title{
					padding: 80px 15px 15px 15px !important;
					font-size: 35px !important;
				}

				.sub-title-content{
					padding: 0 15px 90px 15px !important;
				}

				.title-block{
					padding: 0 15px 0 15px;
				}

				.content{
					padding: 25px 15px 18px 15px !important;
				}

				
			}
		</style>


	</head>

	<body style="padding: 0; margin: 0; background-image:url('https://live.staticflickr.com/65535/48635016097_8c997621d2_o.jpg'); background-repeat: no-repeat; background-size: cover; " bgcolor="#ab66d8" >
		<span style="color:transparent !important; overflow:hidden !important; display:none !important; line-height:0px !important; height:0 !important; opacity:0 !important; visibility:hidden !important; width:0 !important; mso-hide:all;">This is your preheader text for this email (Read more about email preheaders here - https://goo.gl/e60hyK)</span>

		<!-- / Full width container -->
		<table class="full-width-container" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%"  style="width: 100%; height: 100%; padding: 30px 0 30px 0; ">
			<tr>
				<td align="center" valign="top">
					<!-- / 700px container -->
					<table class="container" border="0" cellpadding="0" cellspacing="0" width="700" bgcolor="#ffffff" style="width: 700px; background-image: url(https://tsh.io/wp-content/themes/tsh-theme-2020-04-09-12-42-50/assets/images/header-background.svg); background-repeat: no-repeat; background-position-x: right; background-size: 300px; border-bottom: 6px solid orange;">
						<tr>
							<td align="center" valign="top">
								<!-- / Header -->
								<table class="container header" border="0" cellpadding="0" cellspacing="0" width="620" style="width: 620px;">
									<tr>
										<td style="padding: 30px 0 30px 0; border-bottom: solid 1px #eeeeee;" align="left">
											<a href="#" style="font-size: 30px; text-decoration: none; color: #000000;"> Chateau Mail </a>
										</td>
									</tr>
								</table>
								<!-- /// Header -->

								<!-- / Hero subheader -->
								<table class="container hero-subheader" border="0" cellpadding="0" cellspacing="0" width="620" style="width: 620px;">
									<tr>
										<td class="sub-title" style="font-size: 43px; font-weight: bold; padding: 80px 0 15px 0;" align="left">{{ $name }}</td>
									</tr>

									<tr>
                                        <td class="sub-title-content" style="font-size: 16px; line-height: 27px; color: #969696; padding: 0 60px 90px 0;" align="left"> Je verzond een email vanop de website met volgend bericht: </td>

                                    </tr>
                                    <tr>
                                        <td class="sub-title-content" style="font-size: 16px; line-height: 27px; color: #969696; padding: 0 60px 90px 0;" align="left">{{ $content }}</td>
                                    </tr>
								</table>
								<!-- /// Hero subheader --> 
						

								
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</body>
</html>