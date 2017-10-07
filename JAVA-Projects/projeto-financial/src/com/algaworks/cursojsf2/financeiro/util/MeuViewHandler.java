package com.algaworks.cursojsf2.financeiro.util;

import java.util.Locale;

import javax.faces.context.FacesContext;
import javax.servlet.http.HttpSession;

import com.sun.faces.application.view.MultiViewHandler;

public class MeuViewHandler extends MultiViewHandler {

	@Override
	public Locale calculateLocale(FacesContext context) {
		HttpSession session = (HttpSession) context.getExternalContext().getSession(false);
		if (session != null) {
			Locale locale = (Locale) session.getAttribute("locale");
			
			if (locale != null) {
				return locale;
			}
		}

		return super.calculateLocale(context);
	}

}
