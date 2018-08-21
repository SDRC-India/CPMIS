/**
 * 
 */
package org.sdrc.cpmisweb.service;

import java.util.Properties;

import javax.mail.BodyPart;
import javax.mail.Message;
import javax.mail.PasswordAuthentication;
import javax.mail.Transport;
import javax.mail.internet.InternetAddress;
import javax.mail.internet.MimeBodyPart;
import javax.mail.internet.MimeMessage;
import javax.mail.internet.MimeMultipart;

import org.sdrc.cpmisweb.model.MailModel;
import org.springframework.stereotype.Service;

/**
 * @author Pratyush(pratyush@sdrc.co.in) created on : 11-Jan-2018 3:14:39 pm
 */
@Service
public class MailServiceImpl implements MailService {

	@Override
	public String sendMail(MailModel mail) {
		
		try {
			Properties props = new Properties();
			props.setProperty("mail.transport.protocol", "smtp");
			props.put("mail.smtp.host", "smtp.gmail.com");
			props.put("mail.smtp.socketFactory.port", "587");
			props.put("mail.smtp.socketFactory.class", "avax.net.ssl.SSLSocketFactory");
			props.put("mail.smtp.auth", "true");
			props.put("mail.smtp.port", "587");
			props.put("mail.smtp.starttls.enable", "true");
			
			javax.mail.Session session = javax.mail.Session.getDefaultInstance(
				props, new javax.mail.Authenticator() {
					protected PasswordAuthentication getPasswordAuthentication() {
						return new PasswordAuthentication(
						"cpmisbihar@gmail.com",
						"cpmisbihar@123#!");
					}
			});
			
			Message message = new MimeMessage(session);
			message.setFrom(new InternetAddress());
			message.setRecipients(Message.RecipientType.TO,InternetAddress.parse(mail.getToEmailIds().get(0)));
			message.setSubject(mail.getSubject());
			
			String msg = mail.getMessage();
			
			BodyPart messageBodyPart;
			
	        MimeMultipart multipart = new MimeMultipart("related");
	        messageBodyPart = new MimeBodyPart();
	        String htmlText = msg;
	        messageBodyPart.setContent(htmlText, "text/html");
	        multipart.addBodyPart(messageBodyPart);
	        
			message.setContent(multipart);
			Transport.send(message);
			return "success";
		} catch (Exception e) {
			e.printStackTrace();
			return "failed";
		}
		
	}

}
